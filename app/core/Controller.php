<?php
class Controller
{

    protected $user;
    protected $remember_me;
    protected $model_handler;

    public function __construct()
    {
        if (isset($_SESSION['user'])) {
            $this->user = $_SESSION['user'];
        } else {
            $this->user = null;
        }
        if (isset($_COOKIE['remember_me'])) {
            $this->remember_me = $_COOKIE['remember_me'];
        }
    }

    public function model($model)
    {
        require_once __DIR__ . "/../models/$model.php";
        return new $model();
    }

    public function view($path, $data)
    {
        extract($data);
        require_once __DIR__ . "/../views/$path/index.php";
    }
}
