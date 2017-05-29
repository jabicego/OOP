<?php

namespace OOP;

abstract class Weapon
{
	protected $danio=0;
	protected $magico=false;
	
	public function hacerAtaque()
	{
		return new Ataque($this->danio, $this->magico, $this->getDescKey());
		
	}

	protected function getDescKey()
	{
		return str_replace('OOP\Weapons\\', '', get_class($this)).'ATT';
	}

	

}
