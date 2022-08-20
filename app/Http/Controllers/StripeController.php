<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StripeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function checkout()
    {
        return view('checkout');
    }

    /**
     * @return void
     * @throws ApiErrorException
     */
    public function test()
    {
        Stripe::setApiKey(config('stripe.test.sk'));

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount'  => 500,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => '/success',
            'cancel_url'  => '/',
        ]);

//        return $response->withHeader('Location', $session->url)->withStatus(303);
    }

    /**
     * @return void
     * @throws ApiErrorException
     */
    public function live()
    {
        Stripe::setApiKey(config('stripe.live.sk'));

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount'  => 500,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => '/success',
            'cancel_url'  => '/',
        ]);

//        return $response->withHeader('Location', $session->url)->withStatus(303);
    }

    /**
     * @return Application|Factory|View
     */
    public function success()
    {
        return view('success');
    }
}
