<?php

namespace OOP;
// require 'src/unit.php';
// require 'src/armors.php';
// require 'src/soldiers.php';
require 'vendor/autoload.php';

Traductor::set([
	'BasicArcATT' => ':unit DISPARA FLECHA CON EL ARCO A :oponente',
	'BasicEspATT' => ':unit ATACA CON ESPADA A :oponente',
	'BallestaATT' => ':unit DISPARA FLECHA CON BALLESTA MAGICA A :oponente',
	]);

$armorArch=new Armors\ArmorPlata;
$dog=Unit::CrearSoldado()
	->setWeapon(new Weapons\BasicArc)
	->setArmor(new Armors\ArmorPlata)
	->setEscudo();
$dog->move('SOUTH');
$arc1=new Unit('Archer eclipse', new Weapons\Ballesta);
$arc1->move('ESTE');
$arc1->attack($dog);

$arc1->setArmor($armorArch);
$dog->attack($arc1);
$dog->attack($arc1);
$dog->attack($arc1);
$arc1->setWeapon(new Weapons\BasicArc);
$arc1->attack($dog);
?>
