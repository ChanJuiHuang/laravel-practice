<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Animals\Dog;
use App\Animals\Cat;
use App\Animals\Animal;
use App\Engineers\FullstackEngineer;

class AnimalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Animal::class, Dog::class);
        $this->app->bind('dog', function () {
            return resolve(Animal::class);
        });
        
        $this->app->when(Dog::class)
            ->needs('$voice')
            ->give('bark');

        $this->app->when(Cat::class)
            ->needs('$voice')
            ->give('meow');
        
        $this->app->tag([Dog::class, Cat::class], 'animals');
    }
}
