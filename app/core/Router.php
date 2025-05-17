<?php
session_start();
require_once __DIR__ . "/../../vendor/autoload.php";
require_once __DIR__ . "/../helpers/Environment.php";
require_once __DIR__ . "/../core/Controller.php";
require_once __DIR__ . "/../core/Model.php";
class Router
{

    private $routes = [];

    public function register($router, $controller, $action)
    {
        array_push($this->routes, ["route" => $router, "controller" => $controller, "action" => $action]);
    }

    public function dispatch($uri)
    {
        $find = false;
        foreach ($this->routes as $route) {
            if ($uri == $route["route"]) {
                try {
                    require_once __DIR__ . "/../controllers/" . $route["controller"] . ".php";
                    $controller = new $route["controller"]();

                    try {
                        $controller->{$route["action"]}();
                    } catch (Exception $ex) {
                        throw new Exception("'" . $route["action"] . "' action not found inside the '" . $route["controller"] . "' controller.");
                    }
                    $find = true;
                } catch (Exception $ex) {
                    throw new Exception("'" . $route["controller"] . "' not found.");
                }
            }
        }
        if (!$find) {
            echo "404";
        }
    }
}
