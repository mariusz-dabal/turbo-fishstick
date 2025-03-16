<?php

namespace App\Factory\Character;

use App\Model\Mage;
use App\Model\Character;

class MageFactory extends CharacterFactory
{
    public function create(string $name): Character
    {
        return new Mage(
            name: $name,
            health: 2,
            strength: 2,
            power: 6
        );
    }
}
