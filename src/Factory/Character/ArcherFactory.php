<?php

namespace App\Factory\Character;

use App\Model\Archer;
use App\Model\Character;

class ArcherFactory extends CharacterFactory
{
    public function create(string $name): Character
    {
        return new Archer(
            name: $name,
            health: 4,
            strength: 5,
            power: 1,
        );
    }
}
