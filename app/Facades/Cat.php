<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Cat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \App\Animals\Cat::class;
    }
}