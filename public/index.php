<?php

require __DIR__ . '/../src/bootstrap.php';

use Paw\Core\App;
use Paw\Core\Router;
use Paw\Core\Request;
use Paw\Core\Logger;
use Paw\Core\Exceptions\RouteNotFoundException as RouteNotFoundException;

$logger = App::get('logger');
$router = Router::load(__DIR__ . '/../src/App/routes.php');

try {
    $render = $router->direct(Request::uri(), Request::method());
    $logger->info('Status Code: 200');
} catch (RouteNotFoundException $e) {
    http_response_code(404);
    $render = $router->direct('not_found', 'GET');
    $logger->debug('Status Code: 404 - Route not found', ["Error" => $e]);
} catch (Exception $e) {
    http_response_code(500);
    $render = $router->direct('internal_error', 'GET');
    $logger->error('Status Code: 500 - Internal Server Error', ["Error" => $e]);
}

echo $render;
