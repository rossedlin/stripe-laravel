<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

use Illuminate\Http\RedirectResponse;
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
     * @return RedirectResponse
     * @throws ApiErrorException
     */
    public function test()
    {
        Stripe::setApiKey(config('stripe.test.sk'));

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'gbp',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount'  => 500,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    /**
     * @return RedirectResponse
     * @throws ApiErrorException
     */
    public function live()
    {
        Stripe::setApiKey(config('stripe.live.sk'));

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'gbp',
                        'product_data' => [
                            'name' => 'T-shirt',
                        ],
                        'unit_amount'  => 500,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => 'http://localhost/success',
            'cancel_url'  => 'http://localhost/',
        ]);

        return redirect()->away($session->url);
    }

    /**
     * @return Application|Factory|View
     */
    public function success()
    {
        return view('success');
    }
}
