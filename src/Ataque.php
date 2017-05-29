<?php
namespace OOP;

/**
* 
*/
class Ataque 
{
	protected $danio;
	protected $magico;
	protected $descrip;

	public function __construct($danio, $magico, $descrip)
	{
		$this->danio=$danio;
		$this->magico=$magico;
		$this->descrip=$descrip;
	}

	public function getDesc(Unit $atacante, Unit $victima)
	{
		return Traductor::get($this->descrip, [
			':unit' => $atacante->getName(),
			':oponente' => $victima->getName()]);
	}
	public function hacerDanio()
	{
		return $this->danio;
	} 

	public function esMagico()
	{
		return $this->magico;
	}

	public function esFisico()
	{
		return ! $this->esMagico();
	}
}
