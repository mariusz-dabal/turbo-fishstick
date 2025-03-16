<?php

namespace App\Factory\Game;

use App\Enum\CharacterEnum;
use App\Factory\Character\ArcherFactory;
use App\Factory\Character\MageFactory;
use App\Model\Character;
use Faker\Factory;

class SimpleGameFactory implements GameFactoryInterface
{
    public function __construct(
        private CharacterEnum $player,
        private string $playerName,
        private CharacterEnum $enemy,
    ) {}

    public function createPlayer(): Character
    {
        return $this->createCharacter($this->playerName, $this->player);
    }

    public function createEnemy(): Character
    {
        $faker = Factory::create();
        $enemyName = $faker->name();

        return $this->createCharacter($enemyName, $this->enemy);
    }

    private function createCharacter(string $name, CharacterEnum $characterType): Character
    {
        $characterFactory = match ($characterType) {
            CharacterEnum::ARCHER => new ArcherFactory(),
            CharacterEnum::MAGE => new MageFactory(),
        };

        return $characterFactory->create($name);
    }
}
