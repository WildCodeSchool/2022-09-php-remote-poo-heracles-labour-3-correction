<?php

namespace App;

class Weapon
{
    private int $damage = 10;
    private float $range= 0.5;

    private string $image = 'sword.svg';

    public function __construct(float $range = 0.5, int $damage = 10, string $image = 'sword.svg')
    {
        $this->range = $range;
        $this->damage = $damage;
        $this->image = $image;
    }
    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Get the value of range
     */ 
    public function getRange(): float
    {
        return $this->range;
    }
}