<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;
use App\Core\Logger;

/**
 * Load config
 */
App::bind('config', require __DIR__ . '/../config.php');

/**
 * Load logger object
 */
$logger_level = App::get('config')['logger']['level'];
$logger_path = App::get('config')['logger']['path'];
App::bind('logger', Logger::getLogger($logger_level, $logger_path));

/**
 * Load database connection
 */
/*App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database']),
    App::get('logger')
));*/

/**
 * Load template engine
 */
$loader = new Twig_Loader_Filesystem(App::get('config')['twig']['templates_dir']);
$twig = new Twig_Environment($loader, array(
    'cache' => App::get('config')['twig']['templates_cache_dir'],
    'debug' => true,
));
App::bind('twig', $twig);
