<?php
namespace OOP;

class Soldier extends Unit
{
  protected $armaduraSOLDIER;
    protected $danio=90;
    
    public function __construct ($name)
    {
        parent::__construct($name);
    }
    
    public function setArmor(Armor $armadura=null)
    {
        $this->armaduraSOLDIER=$armadura;
    }
  public function attack(Unit $oponente)
  {
    show ("{$this->name} CORTA A ---> {$oponente->getName()}");
    $oponente->hacerDanio($this->danio);
  }

  protected function absorDanio($danioSoldier)
    {
      if ($this->armaduraSOLDIER)
      {
          $danioSoldier=$this->armaduraSOLDIER->absordanio($danioSoldier);
      }
        return $danioSoldier;
    }

}






class Arch extends Unit
{
  protected $danio=46;

  public function attack(Unit   $oponente)
  {
    show ("{$this->name} DISPARA FLECHA ---> {$oponente->getName()} EN FRENTE");

    $oponente->hacerDanio($this->danio);

  }
}