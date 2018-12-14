<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Engineers\Skill;
use App\Engineers\FrontendEngineer;
use App\Engineers\BackendEngineer;
use App\Engineers\FullstackEngineer;
use App\Animals\Animal;
use App\Animals\Dog;
use App\Animals\Cat;

class EngineerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Skill::class, FullstackEngineer::class);
        $this->app->when(FullstackEngineer::class)
            ->needs('$skill')
            ->give('Laravel and Reactjs');

        $this->app->when(FrontendEngineer::class)
            ->needs('$skill')
            ->give('Reactjs');

        $this->app->when(BackendEngineer::class)
            ->needs('$skill')
            ->give('Laravel');

        $this->app->when(BackendEngineer::class)
            ->needs(Animal::class)
            ->give(Dog::class);

        $this->app->when(FrontendEngineer::class)
            ->needs(Animal::class)
            ->give(Cat::class);
    }
}
