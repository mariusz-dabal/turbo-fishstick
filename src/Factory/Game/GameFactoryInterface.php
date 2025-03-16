<?php

namespace App\Factory\Game;

use App\Model\Character;

interface GameFactoryInterface
{
    public function createPlayer(): Character;
    public function createEnemy(): Character;
}
