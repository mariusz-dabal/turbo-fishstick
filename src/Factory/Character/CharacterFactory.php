<?php

namespace App\Factory\Character;

use App\Model\Character;

abstract class CharacterFactory
{
    abstract public function create(string $name): Character;
}
