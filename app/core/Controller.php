<?php
class Controller
{

    protected $user;
    protected $model_handler;

    public function __construct()
    {
        if (isset($_SESSION['user'])) {
            $this->user = $_SESSION['user'];
        } else {
            $this->user = null;
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
