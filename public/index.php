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
$router->register('/album', 'CartController', 'album');
$router->register('/profile', 'UserController', 'profile');
$router->register('/account', 'UserController', 'account');
$router->register('/my-tracks', 'TrackController', 'my_tracks');
$router->register('/track/add', 'TrackController', 'add_track');
$router->register('/track/edit', 'TrackController', 'edit_track');
$router->register('/user/stats', 'ReportController', 'stats');
$router->register('/admin', 'AdminController', 'tracks');
$router->register('/admin/tracks', 'AdminController', 'tracks');
$router->register('/admin/users', 'AdminController', 'users');
$router->register('/admin/operators', 'AdminController', 'operators');
$router->register('/admin/stats', 'AdminController', 'stats');

try {
    $router->dispatch(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
} catch (Exception $ex) {
    throw new Exception($ex->getMessage());
}
