# Stripe Laravel

---

## Requirements

 - PHP v8.0
 - Composer v2.4.1
 - Web Server (HTTPS)

## Setup

 - `composer create-project laravel/laravel stripe-laravel`
 - `cd stripe-laravel`
 - `composer require stripe/stripe-php`

## Code

 - `app/Http/Controllers/StripeController.php`
 - `config/stripe.php`
 - `routes/web.phps`
 - `resources/views/checkout.blade.php`
 - `resources/views/layout.blade.php`
 - `resources/views/success.blade.php`

## Env

Copy `.env.example` and name `.env` and populate the following API keys

 - `STRIPE_TEST_SK`
 - `STRIPE_TEST_PK`
 - `STRIPE_LIVE_SK`
 - `STRIPE_LIVE_PK`

## Deploy

SFTP to your favourite hosting provider, make sure it's HTTPS.
