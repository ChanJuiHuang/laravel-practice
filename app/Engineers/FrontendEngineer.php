<?php

namespace App\Engineers;

use App\Animals\Animal;

class FrontendEngineer implements Skill
{
    protected $skill;
    
    public function __construct(string $skill, Animal $cat)
    {
        $this->skill = $skill;
        $this->cat = $cat;
    }

    public function showSkill()
    {
        echo($this->skill);
    }
}
