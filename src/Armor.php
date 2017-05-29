<?php
namespace OOP;

abstract class Armor
{
	protected $NomArm="ARMADURA SIN DEFINIR";

    public function absorDanio(Ataque $ataque)
    {
    	if ($ataque->esMagico())
    	{
    		return $this->absorDanioMAG($ataque);
    	}
    	else
    	{
    		return $this->absorDanioFIS($ataque);
    	}
    }

    public function absorDanioFIS(Ataque $ataque)
    {
        return $ataque->hacerDanio();
    }
    
    public function absorDanioMAG(Ataque $ataque)
    {
        return $ataque->hacerDanio();
    }

        public function getname()
    {
    	return "{$this->NomArm}";
    }
}
