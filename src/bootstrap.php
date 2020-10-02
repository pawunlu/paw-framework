<?php

require __DIR__ . '/../vendor/autoload.php';

use Paw\Core\App;
use Paw\Core\Database\QueryBuilder;
use Paw\Core\Database\Connection;
use Paw\Core\Logger;
use Paw\Core\TwigBuilder;

/**
 * Load config
 */
App::bind('config', require __DIR__ . '/../config.php');
$config = App::get('config');

/**
 * Load logger object
 */
$logger_level = $config['logger']['level'];
$logger_path = $config['logger']['path'];
App::bind('logger', Logger::getLogger($logger_level, $logger_path));

/**
 * Load database connection
 */
App::bind('database', new QueryBuilder(
    Connection::make($config['database']),
    App::get('logger')
));

/**
 * Build a template engine
 */
$twig = (new TwigBuilder)
    ->setTemplateDir($config['twig']['templates_dir'])
    ->setCacheDir($config['twig']['templates_cache_dir'])
    ->setDebug(true)
    ->buildLoader()
    ->build();
App::bind('twig', $twig);
