<?php
class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $data = [
            "user" => $this->user
        ];
        $this->view("home", $data);
    }
}
