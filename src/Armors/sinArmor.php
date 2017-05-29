<?php
namespace OOP\Armors;
use OOP\Armor;
use OOP\Ataque;

class sinArmor extends Armor
{
    public function absorDanio(Ataque $ataque)
    {
        return $ataque->hacerDanio();
    }
}
