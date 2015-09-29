# IVR Phone Tree: IVR for beginners. powered by Twilio - Laravel

An example application implementing an automated phone line using
Twilio and Laravel.

[![Build Status](https://travis-ci.org/TwilioDevEd/ivr-phone-tree-laravel.svg?branch=master)](https://travis-ci.org/TwilioDevEd/ivr-phone-tree-laravel)

## Run the application

1. Clone the repository and `cd` into it.
1. Install the application's dependencies with [Composer](https://getcomposer.org/)

   ```bash
   $ composer update
   ```
1. Run the application using Artisan.

   ```bash
   $ php artisan serve
   ```
1. Expose the application to the wider Internet using [ngrok](https://ngrok.com/)

   ```bash
   $ ngrok 8000 http
   ```
1. Provision a number under the
   [Manage Numbers page](https://www.twilio.com/user/account/phone-numbers/incoming)
   on your account. Set the voice URL for the number to
   `http://<your-ngrok-subdomain>.ngrok.io/ivr/welcome`.
1. Grab your phone and call your newly-provisioned number!

## Dependencies

This application uses this Twilio helper library:
* [twilio-php](https://github.com/twilio/twilio-php)

## Run the tests

Run at the top-level directory:

```
$ phpunit --coverage-text
```
