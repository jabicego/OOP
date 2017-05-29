<?php

namespace OOP;
class FileLogger
{
	
	public static function info($msj)
{
    file_put_contents(__DIR__.'\storage\log.txt', '('.date('Y-m-d H:i:s').')'.$msj."\n", FILE_APPEND);
}

}
