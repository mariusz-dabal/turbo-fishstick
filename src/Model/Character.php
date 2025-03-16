<?php

namespace App\Model;

abstract class Character
{
    public function __construct(
        protected string $name,
        protected int $health,
        protected int $strength,
        protected int $power,
    ) {}

    public function attack(): int
    {
        return $this->strength + $this->power;
    }

    public function defence(int $damage): int
    {
        return $this->health -= $damage;
    }

    public function getHealth(): int
    {
        return $this->health;
    }
}
