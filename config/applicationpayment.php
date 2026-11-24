<?php

return [
    "sandbox"         => env("BKASH_SANDBOX", true),
     'app_key' => env('BKASH_APP_KEY',""),
    'app_secret' => env('BKASH_APP_SECRET',""),
    'base_url' => env('BKASH_BASE_URL',"https://tokenized.pay.bka.sh"),
    'username' => env('BKASH_USERNAME',""),
    'password' => env('BKASH_PASSWORD',"MGbB,%uC7-C"),

    "callbackURL"     => env("BKASH_CALLBACK_URL", "https://tuitionterminal.com.bd/tutor/payment"),
    'timezone'        => 'Asia/Dhaka',
];
