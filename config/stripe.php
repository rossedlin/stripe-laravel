<?php

return [
    'test' => [
        'sk' => env('STRIPE_TEST_SK'),
        'pk' => env('STRIPE_TEST_PK'),
    ],
    'live' => [
        'sk' => env('STRIPE_LIVE_SK'),
        'pk' => env('STRIPE_LIVE_PK'),
    ],
];
