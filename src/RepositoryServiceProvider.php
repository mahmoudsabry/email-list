<?php

namespace MS\EmailList;

use Illuminate\Support\ServiceProvider;
use MS\EmailList\EloquentRepository;
use MS\EmailList\EloquentRepositoryInterface;
use MS\EmailList\Repository\EmailListRepository;
use MS\EmailList\Repository\Interfaces\EmailListRepositoryInterface;



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
        $this->app->bind(EmailListRepositoryInterface::class, EmailListRepository::class);
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
