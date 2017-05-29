<?php
namespace OOP;

class Unit
{
  protected $hp = 100;
  protected $name;
  protected $armadura;
  protected $weapon;
  protected $ataque;

  public function __construct($name, Weapon $weapon = null)
  {
    $this->name=$name;
    $this->weapon=$weapon;
    $this->armadura=new Armors\sinArmor;
  }
  
  public static function CrearSoldado()
  {
    $soldado = new Unit('doggy', new Weapons\BasicEsp);
    $soldado->setArmor(new Armors\ArmorBad);

    return $soldado;
  }

  public function setWeapon(Weapon $weapon)
  {
    $this->weapon=$weapon;

    return $this;
  }

  public function setArmor(Armor $armadura=null)
    {
      $this->armadura=$armadura;
      HtmlLogger::info("{$this->name} TIENE {$this->armadura->getname()}");
      FileLogger::info("{$this->name} TIENE {$this->armadura->getname()}");
      return $this;
    }

  public function setEscudo()
  {
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }
 

  public function move($direc)
  {
    HtmlLogger::info("{$this->name} avanza hacia el $direc");
    FileLogger::info("{$this->name} avanza hacia el $direc");
  }
  

    public function attack(Unit $oponente)
  {
    $ataque=$this->weapon->hacerAtaque();

    // if (! $this->weapon) {
    //   show("{$this->getName()} NO TIENE ARMAS!!");
      
    // }
    HtmlLogger::info($ataque->getDesc($this, $oponente));
    FileLogger::info($ataque->getDesc($this, $oponente));
    $oponente->hacerDanio($ataque);
  }



  public function hacerDanio(Ataque $ataque)
  {
     $this->hp = $this->hp - $this->armadura->absordanio($ataque);
     
      HtmlLogger::info("{$this->name} tiene {$this->hp} puntos");
      FileLogger::info("{$this->name} tiene {$this->hp} puntos");
     
      if ($this->hp<=10)
      {
        $this->die();
      }
  }


  public function getHp()
  {
    return $this->hp;
    HtmlLogger::info("{$this->name} tiene {$this->hp} puntos");
    FileLogger::info("{$this->name} tiene {$this->hp} puntos");
  }


   public function die()
  {
      HtmlLogger::info("{$this->name} MUERE");
      FileLogger::info("{$this->name} MUERE");
      exit();
  }
  

 
    
}
