<?php

declare(strict_types = 1);

namespace Uc\TwilioClient;

use Illuminate\Support\ServiceProvider;
use Uc\TwilioClient\Client\TwilioClient;

/**
 * Service provider of the package.
 */
class TwilioClientServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'twilio');

        $this->app->singleton(TwilioClient::class, TwilioClient::class);
    }
}
