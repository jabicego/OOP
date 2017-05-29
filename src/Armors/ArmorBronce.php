<?php
namespace OOP\Armors;
use OOP\Armor;
use OOP\Ataque;

class ArmorBronce extends Armor
{
    protected $NomArm="ARMADURA LITTLE BRONCE";

    public function absorDanio(Ataque $ataque)
    {
        return $ataque->hacerDanio() / 2;
    }

    public function getname()
    {
    	return "BRONCE";
    }
}

