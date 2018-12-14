<?php

namespace App\Animals;

class Cat implements Animal
{
    protected $voice;

    public function __construct(string $voice)
    {
        $this->voice = $voice;
    }

    public function says()
    {
        echo($this->voice);
    }
}
