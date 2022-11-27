<?php

namespace MS\EmailList;

use Illuminate\Support\ServiceProvider;
use MS\EmailList\EloquentRepository;
use MS\EmailList\EloquentRepositoryInterface;



class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, EloquentRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
