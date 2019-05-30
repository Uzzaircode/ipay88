<?php

return [

    'merchant_code' => env('IPAY88_MERCHANT_CODE'),
    'merchant_key' => env('IPAY88_MERCHANT_KEY'),
    'payment_url' => env('IPAY88_PAYMENT_URL', 'https://payment.ipay88.com.my/epayment/entry.asp')

];