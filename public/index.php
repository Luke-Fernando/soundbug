<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../app/core/Router.php';

$router = new Router();

$router->register('/', 'HomeController', 'home');
$router->register('/home', 'HomeController', 'home');
$router->register('/all-tracks', 'TrackController', 'all_tracks');
$router->register('/advanced-search', 'TrackController', 'advanced_search');
$router->register('/track', 'TrackController', 'track');
$router->register('/reviews', 'TrackController', 'reviews');
$router->register('/collections', 'CartController', 'collections');

try {
    $router->dispatch(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
} catch (Exception $ex) {
    throw new Exception($ex->getMessage());
}
