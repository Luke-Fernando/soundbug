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
$router->register('/signup', 'UserController', 'signup');
$router->register('/signin', 'UserController', 'signin');
$router->register('/reset-password', 'UserController', 'reset_password');
$router->register('/admin/signin', 'AdminController', 'signin');
$router->register('/reviews/add', 'TrackController', 'add_review');
$router->register('/reviews/edit', 'TrackController', 'edit_review');
$router->register('/api/user/signup', 'UserController', 'signup_proccess');
$router->register('/api/user/signin', 'UserController', 'signin_proccess');
$router->register('/api/user/signout', 'UserController', 'signout_proccess');
$router->register('/api/user/send-reset-link', 'UserController', 'send_reset_link');
$router->register('/api/load-sub-category', 'TrackController', 'load_sub_category');
$router->register('/api/track/add', 'TrackController', 'add_track_proccess');
$router->register('/email', 'HomeController', 'email_template');
try {
    $router->dispatch(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
} catch (Exception $ex) {
    throw new Exception($ex->getMessage());
}
// $router->dispatch(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
