<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Phone number must start with 08xxx format
        Validator::extend('phone_number', function($attribute, $value, $parameters)
        {
            return substr($value, 0, 2) == '08';
        });
        Validator::replacer('phone_number', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Format Nomor Telpon tidak sesuai, mohon gunakan format 08xxxxxxxxxx');
        });

        // Phone number must start with 62xxx format
        Validator::extend('62phone_number', function($attribute, $value, $parameters)
        {
            return substr($value, 0, 1) == '8';
        });
        Validator::replacer('62phone_number', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Format Nomor Telpon tidak sesuai, mohon gunakan format +628xxxxxxxxxx');
        });
    }
}
