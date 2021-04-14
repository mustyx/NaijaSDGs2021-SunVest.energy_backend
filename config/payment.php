<?php
return [
    /*
     * Paystack WebHook URL
     */
    'webhookUrl' => '/paystack/hook',

    /*
     * Public Key From Paystack Dashboard
     *
     */
    'publicKey' => $publicKey = env('PAYSTACK_PUBLIC_KEY', 'publicKey'),
    'publicTestKey' => $publicTestKey = env('PAYSTACK_PUBLIC_TEST_KEY', 'publicKey'),
    'publicKeyRave' => $publicKeyRave = env('RAVE_PUBLIC_KEY', 'publicKey'),
    'publicTestKeyRave' => $publicTestKeyRave = env('RAVE_PUBLIC_TEST_KEY', 'publicKey'),

    /*
     * Secret Key From Paystack Dashboard
     *
     */
    'secretKey' => $secretKey = env('PAYSTACK_SECRET_KEY', 'secretKey'),
    'secretTestKey' => $secretTestKey = env('PAYSTACK_SECRET_TEST_KEY', 'secretKey'),
    'secretKeyRave' => $secretKeyRave = env('RAVE_SECRET_KEY', 'secretKey'),
    'secretTestKeyRave' => $secretTestKeyRave = env('RAVE_SECRET_TEST_KEY', 'secretKey'),

    /*
     * Paystack Payment URL
     *
     */
    'paymentUrl' => $paymentUrl = env('PAYSTACK_PAYMENT_URL'),
    'paymentUrlRave' => $paymentUrlRave = env('RAVE_PAYMENT_URL'),

    /*
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => $merchantEmail = env('MERCHANT_EMAIL'),
    'merchantEmailRave' => $merchantEmailRave = env('RAVE_MERCHANT_EMAIL'),

    /*
     * Default connection that will be used to connect to the API
     */
    'default' => 'test',

    /*
     * Here you can specify different Paystack connection.
     */
    'connections' => [
        'test' => [
            'publicKey'     => $publicTestKey,
            'secretKey'     => $secretTestKey,
            'paymentUrl'    => $paymentUrl,
            'cache'         => false,
        ],
        'live' => [
            'publicKey'     => $publicKey,
            'secretKey'     => $secretKey,
            'paymentUrl'    => $paymentUrl,
            'cache'         => false,
        ],
    ],
    'connectionsRave' => [
        'test' => [
            'publicKey'     => $publicTestKeyRave,
            'secretKey'     => $secretTestKeyRave,
            'paymentUrl'    => $paymentUrlRave,
            'cache'         => false,
        ],
        'live' => [
            'publicKey'     => $publicKeyRave,
            'secretKey'     => $secretKeyRave,
            'paymentUrl'    => $paymentUrlRave,
            'cache'         => false,
        ],
    ],

    /**
     * Company/Business/Store Name: The name of your store
     *
     */
    'raveTitle' => env('RAVE_TITLE', 'Rave Payment Gateway'),

    /**
     * Logo: Enter the URL of your company/business logo
     *
     */
    'raveLogo' => env('RAVE_LOGO', ''),

    /**
     * Prefix: This is added to the front of your transaction reference numbers
     *
     */
    'ravePrefix' => env('RAVE_PREFIX', 'rave'),

    /**
     * Prefix: This is added to the front of your transaction reference numbers
     *
     */
    'secretHash' => env('RAVE_SECRET_HASH', ''),

];
