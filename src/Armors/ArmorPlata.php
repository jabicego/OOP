<?php
namespace OOP\Armors;
use OOP\Armor;
use OOP\Ataque;

class ArmorPlata extends Armor
{
    protected $NomArm="ARMADURA BIG PLATA";
    public function absorDanioFIS(Ataque $ataque)
    {
            return $ataque->hacerDanio() / 3;
    }
    
    

}
