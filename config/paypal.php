<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID','AXQng1S57K1sm5SMXOdmlnKC_Yy72kVz4Ot4jvZK64wGIOWoxO-YwJMjBX5bNaEA6qFZE9McM0sB6iXz'),
    'secret' => env('PAYPAL_SECRET','EKduhEdS1FYK7VduKaz0v6U3xS3ArXigPQHeTRIHxHN-7Y5IWXmWvd14IRbK5EkL8d5R-9s5Z5AyZZq_'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
