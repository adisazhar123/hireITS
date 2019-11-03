<?php

namespace App\Http\Controllers;

use App\PaymentProof;
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
use PayPal\Api\FlowConfig;
use PayPal\Api\Presentation;
use PayPal\Api\InputFields;
use PayPal\Api\WebProfile;
use App\Bid;
use App\Job;
use App\Freelancer;
use App\PaymentModel;
use Auth;
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


    public function createWebProfile(){

    	$flowConfig = new FlowConfig();
    	$presentation = new Presentation();
    	$inputFields = new InputFields();
    	$webProfile = new WebProfile();
    	$flowConfig->setLandingPageType("Billing");

    	$presentation->setLogoImage("http://seekvectorlogo.com/wp-content/uploads/2018/01/pak-elektron-limited-pel-vector-logo-small.png")->setBrandName("hireITS"); //NB: Paypal recommended to use https for the logo's address and the size set to 190x60.

    	$inputFields->setAllowNote(true)->setNoShipping(1)->setAddressOverride(0);

    	$webProfile->setName("hireits " . uniqid())
    		->setFlowConfig($flowConfig)
    		->setPresentation($presentation)
    		->setInputFields($inputFields)
        ->setTemporary(true);

    	$createProfileResponse = $webProfile->create($this->_apiContext);

    	return $createProfileResponse->getId();
    }


    public function getCheckout(Request $request){
        $price = Bid::where('job_id',$request->id)->where('freelancer_id', $request->freelancer_id)->first();
        $job = Job::find($price['job_id']);

        //Setup Payer
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        //setup payee
        $payee = new Payee();
        $payee->setEmail(Freelancer::find($price['freelancer_id'])['paypal']);
        //$payee->setEmail("Romeo@gmail.com");

        //Item
        $item = new Item();
        $item->setName("Payment for project: ".$job['name'])
        ->setCurrency("USD")
        ->setQuantity(1)
        ->setPrice($price['price']);

        $itemList = new ItemList();
        $itemList->setItems(array($item));

        $amount = new Amount();
        $amount->setCurrency('USD');
        $amount->setTotal($price['price']);

         //Setup Transaction
        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('hireITS Payment!');
        $transaction->setPayee($payee);
        $transaction->setItemList($itemList);

         //List redirect URLS
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(action('PaymentController@getDone'));
        $redirectUrls->setCancelUrl(action('PaymentController@getCancel'));

        //And finally set all the prerequisites and create the payment
        $payment = new Payment();
        $payment->setExperienceProfileId($this->createWebProfile());
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));
        try{
          $response = $payment->create($this->_apiContext);
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
          echo $ex->getCode(); // Prints the Error Code
          echo $ex->getData(); // Prints the detailed error message
          die($ex);
      } catch (Exception $ex) {
          die($ex);
      }

        //Return our payment info to the user
        return $response;
    }

    public function getDone(Request $request){

      $id = $request->get('paymentID');
      $token = $request->get('token');
      $payer_id = $request->get('payerID');

      $payment = $this->getById($id, $this->_apiContext);

      $paymentExecution = new PaymentExecution();

      $paymentExecution->setPayerId($payer_id);
      $executePayment = $payment->execute($paymentExecution, $this->_apiContext);

       $price = Bid::where('job_id', $request->id)->where('freelancer_id', $request->freelancer_id)->first();
       $job = Job::find($price['job_id']);
       $job->complete = 1;
       $job->save();

       $payment = new PaymentModel;
       $payment->won_by_id = $price->freelancer_id;
       $payment->job_id = $price->job_id;
       $payment->description = "successfully paid.";
       $payment->employer_id = Auth::user()->id;
       $payment->amount = $price->price;
       $payment->save();

      // Do something to signify we succeeded
      return Response::json(['success' => 1, 'payment'=> $executePayment], 200);

      //return response()->json(['success', 200]);
  }

public function getCancel()
{
   return new JsonResponse('error', 422);
}

public static function getById($paymentId, $apiContext = null){
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

    public function makePayment(Request $request)
    {
        $path = null;

        if ($request->hasFile('transferProof')) {
            $path = $request->file('transferProof')->store('public/payments');
            $path = str_replace("public","", $path);
        }

        PaymentProof::create([
            'account_name' => $request->accountName,
            'account_number' => $request->accountNumber,
            'bank_account' => $request->bankAccount,
            'time_of_transfer' => $request->timeTransfer,
            'transfer_proof_path' => $path,
            'job_id' => $request->jobId
        ]);

        $job = Job::find($request->jobId);
        $job->complete = 1;
        $job->active = 0;

        $job->save();

        return redirect()->back()->with('success', 'Freelancer has been paid successfully!');
    }

    public function getPaymentProof($jobId)
    {
        $payment = PaymentProof::where('job_id', $jobId)->first();

        return response()->json($payment);
    }
}
