<?php

namespace RandomPassword;

use Illuminate\Support\ServiceProvider;

/**
 * Class PasswordServiceProvider
 */
class PasswordServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Password::class, function () {
            return new Password('6');
        });
    }
}