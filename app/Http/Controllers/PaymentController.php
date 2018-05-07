<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\ChargeModel;
use PayPal\Api\Currency;
use PayPal\Api\MerchantPreferences;
use PayPal\Api\PaymentDefinition;
use PayPal\Api\PaymentExecution;
use PayPal\Api\getById;
use PayPal\Api\Plan;
use PayPal\Api\Patch;
use PayPal\Api\PatchRequest;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\Payee;
use PayPal\Rest\ApiContext;
use Illuminate\Support\Facades\Input;
use PayPal\Common\PayPalModel;
use PayPal\Auth\OAuthTokenCredential;
use URL;
use Session;
use Redirect;
use PayPal;
use Response;
class PaymentController extends Controller
{

    private $_apiContext;

    public function __construct(){
      $paypal_conf = \Config::get('paypal');
      $this->_apiContext = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'],$paypal_conf['secret']));
      $this->_apiContext->setConfig($paypal_conf['settings']);
/*
    $this->_apiContext = new ApiContext(
    config('services.paypal.client_id'),
    config('services.paypal.secret'));

    $this->_apiContext->setConfig(array(
        'mode' => 'sandbox',
        'service.EndPoint' => 'https://api.sandbox.paypal.com',
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path('logs/paypal.log'),
        'log.LogLevel' => 'FINE'
    ));*/

    }

    public function getCheckout()
{

        //Setup Payer
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        //Setup Amount
        $amount = new Amount();
        $amount->setCurrency('USD');
        $amount->setTotal(20);

         //Setup Transaction
        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Your awesome Product!');

         //List redirect URLS
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(action('PaymentController@getDone'));
        $redirectUrls->setCancelUrl(action('PaymentController@getCancel'));

//And finally set all the prerequisites and create the payment
        $payment = new Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));
        $response = $payment->create($this->_apiContext);

        //Return our payment info to the user
        return $response;
    }

    public function getDone(Request $request)
{
    $id = $request->get('paymentID');
    $token = $request->get('token');
    $payer_id = $request->get('payerID');

    $payment = $this->getById($id, $this->_apiContext);

    $paymentExecution = new PaymentExecution();

    $paymentExecution->setPayerId($payer_id);
    $executePayment = $payment->execute($paymentExecution, $this->_apiContext);

    /*
     * Here is where you would do your own stuff like add a record for the payment, trigger a hasPayed event, etc.
     */

    // Do something to signify we succeeded
    return Response::json([
        'success' => ''
    ], 200);

    //return response()->json(['success', 200]);
}

public function getCancel()
{
   return new JsonResponse('error', 422);
}

public static function getById($paymentId, $apiContext = null)
{
    if (isset($apiContext)) {
        return Payment::get($paymentId, $apiContext);
    }
    return Payment::get($paymentId);
}


    public function payWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Item 1') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice(100); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal(100);

        $payee = new Payee();
        $payee->setEmail("a@gmail.com");

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setPayee($payee)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status')) /** Specify return URL **/
            ->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::route('index');
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('index');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

/** redirect to paypal **/
            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('index');
    }

    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::route('index');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            \Session::put('success', 'Payment success');
            return Redirect::route('index');
        }

        \Session::put('error', 'Payment failed');
        return Redirect::route('index');
    }
}
