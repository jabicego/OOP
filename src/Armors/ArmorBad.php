<?php
namespace OOP\Armors;
use OOP\Armor;
use OOP\Ataque;

class ArmorBad extends Armor
{
    protected $NomArm="ARMADURA BAD AGAIN MAGIC";

    public function absorDanioMAG(Ataque $ataque)
    {
        return $ataque->hacerDanio() / 4;
    
    }
}
