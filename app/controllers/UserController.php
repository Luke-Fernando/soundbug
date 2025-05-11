<!-- Handles all user-related actions (account and profile).

Functions:

register() – Sign up new users

login() – Sign in users

logout() – Log out current user

profile() – View/edit profile

changePassword() – Change password

forgotPassword() – Handle password reset -->

<?php
class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function profile()
    {
        $data = [
            'user' => $this->user,
        ];
        $this->view("profile", $data);
    }

    public function account()
    {
        $data = [
            'user' => $this->user
        ];
        $this->view("account", $data);
    }

    public function signup()
    {
        $data = [];
        $this->view("signup", $data);
    }

    public function signin()
    {
        $data = [];
        $this->view("signin", $data);
    }

    public function reset_password()
    {
        $data = [];
        $this->view("reset-password", $data);
    }
}
