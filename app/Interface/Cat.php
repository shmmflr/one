<?php

namespace App\Interface;

use App\Interface\Animals;

class Cat implements Animals
{

    public function animalSound(string $sound)
    {
        return 'The Cat Sound is' . ' ' . $sound;

    }

    public function animalsType(string $type)
    {
        return 'The Cat Type is' . ' ' . $type;

    }
}