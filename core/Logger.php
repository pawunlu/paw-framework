<?php

namespace App\Core;

use Monolog\Logger as MonologLogger;
use Monolog\Handler\StreamHandler;

final class Logger
{
	/**
	 * Implementa Singleton del Logger
	 * @return Logger La instancia del Logger
	 */
	public static function getLogger($level, $path = '../logs/mvc.log')
	{
		static $instancia = null;
		if ( is_null($instancia) ) {
			$instancia = new MonologLogger('mvc_logger');
			$instancia->pushHandler(new StreamHandler($path, $level));
		}
		return $instancia;
	}

	/**
	 * Evitamos que pueda ser instanciado desde afuera
	 */
	private function __construct()
	{

	}
}