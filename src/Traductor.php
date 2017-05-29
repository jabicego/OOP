<?php

namespace OOP;

class Traductor
{
	protected static $mensajes=[];

	public static function set(array $mensajes)
	{
		static::$mensajes = $mensajes;
	}

	public static function get($key, array $params=array())
	{
		if (! static::has($key))
		{
			return "[$key]";
		}
		
		return static::reempParams(static::$mensajes[$key], $params);
		
	}
	
	public static function has($key)
	{
		return isset(static::$mensajes[$key]);
	}

	public static function reempParams($msj, array $params)
	{
		foreach ($params as $key => $value) 
		{
			 //echo "{$key} => {$value} ";
			 //echo "{$msj}";
			$msj=str_replace($key, $value, $msj);
			//echo $msj;
		}

		return $msj;
	}
}