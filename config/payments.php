<?php
/**
 * Created by PhpStorm.
 * User: Yagami
 * Date: 9/01/2021
 * Time: 14:41
 */

return [
    'client_id' => env('PAYPAL_CLIENT_ID'),
    'secret' => env('PAYPAL_SECRET'),

    'settings' => [
        'mode' => env('PAYPAL_MODE', 'SANDBOX'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path('/logs/paypal.log'),
        'log.LogLevel' => 'ERROR'
    ]
];