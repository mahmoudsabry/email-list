<?php
namespace MS\EmailList;

use Illuminate\Support\ServiceProvider;

class EmailListServiceProvider extends ServiceProvider
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

        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations/');
    }
}

