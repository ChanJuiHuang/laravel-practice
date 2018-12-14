<?php

namespace App\Engineers;

class FullstackEngineer implements Skill
{
    protected $skill;

    public function __construct(string $skill)
    {
        $this->skill = $skill;
    }

    public function showSkill()
    {
        echo($this->skill);
    }
}
