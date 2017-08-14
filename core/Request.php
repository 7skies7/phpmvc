<?php

class Request
{

	public static function uri()
	{
		return trim(str_replace('php-learning/index.php','',$_SERVER['REQUEST_URI']),'/');
	}
}