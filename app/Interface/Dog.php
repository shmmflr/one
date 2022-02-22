<?php

namespace App\Interface;

use App\Interface\Animals;

class Dog implements Animals
{

    public function animalSound(string $sound)
    {
        return 'The Dog Sound is' . ' ' . $sound;

    }

    public function animalsType(string $type)
    {
        return 'The Dog Type is' . ' ' . $type;

    }
}