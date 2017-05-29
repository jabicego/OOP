<?php
namespace OOP;

interface Armor
{
    public function absorDanio($danio);
}

class ArmorBronce implements Armor
{
    public function absorDanio($danio)
    {
        return $danio / 2;
    }
}

class ArmorPlata implements Armor
{
    public function absorDanio($danio)
    {
        return $danio / 3;
    }
}

class ArmorBad implements Armor
{
    public function absorDanio($danio)
    {
        return $danio * 2;
    }
}
