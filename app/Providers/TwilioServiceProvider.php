<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Twilio\Rest\Client;

class TwilioServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Client::class, function () {
            return new Client(
                config('services.twilio.sid'),
                config('services.twilio.token')
            );
        });
    }

    public function boot()
    {
        //
    }
}
