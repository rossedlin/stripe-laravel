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
 - `php artisan make:controller StripeController`

## Code

 - `app/Http/Controllers/StripeController.php`
 - `config/stripe.php`
 - `routes/web.php`
 - `resources/views/index.blade.php`

## Env

Copy `.env.example` name it `.env` and populate the following API keys

 - `STRIPE_SK`
 - `STRIPE_PK`

## Deploy

SFTP to your favourite hosting provider, make sure it's HTTPS.
