<?php

namespace App\Model;

use App\Factory\Game\GameFactoryInterface;

class Game
{
    private Character $player;
    private Character $enemy;

    public function __construct(GameFactoryInterface $gameFactory)
    {
        $player = $gameFactory->createPlayer('Player');
        $enemy = $gameFactory->createEnemy();

        $this->player = $player;
        $this->enemy = $enemy;
    }

    public function play(): string
    {
        $playerDamage = $this->player->attack();
        $enemyDamage = $this->enemy->attack();

        $this->player->defence($enemyDamage);
        $this->enemy->defence($playerDamage);

        $playerHealth = $this->player->getHealth();
        $enemyHealth = $this->enemy->getHealth();

        if ($playerHealth <= 0 && $enemyHealth <= 0) {
            return 'It\'s a draw!';
        }

        if ($playerHealth <= 0) {
            return 'You lose!';
        }

        if ($enemyHealth <= 0) {
            return 'You win!';
        }

        return $this->play();
    }
}
