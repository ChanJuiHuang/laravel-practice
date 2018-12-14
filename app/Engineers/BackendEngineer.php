<?php

namespace App\Engineers;

use App\Animals\Animal;

class BackendEngineer implements Skill
{
    protected $skill;
    public $dog;
    
    public function __construct(string $skill, Animal $dog)
    {
        $this->skill = $skill;
        $this->dog = $dog;
    }

    public function showSkill()
    {
        echo($this->skill);
    }
}
