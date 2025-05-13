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
        $this->model_holder = $this->model("UserModel");
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

    public function signup_process()
    {
        $response = [
            'status' => 'success',
            'message' => '',
        ];
        $inputs = [
            [
                'variable' => 'first_name',
                'name' => 'First name',
                'type' => 'text',
            ],
            [
                'variable' => 'last_name',
                'name' => 'Last name',
                'type' => 'text',
            ],
            [
                'variable' => 'username',
                'name' => 'Username',
                'type' => 'text',
            ],
            [
                'variable' => 'mobile',
                'name' => 'Mobile No',
                'type' => 'text',
            ],
            [
                'variable' => 'email',
                'name' => 'Email',
                'type' => 'email',
            ],
            [
                'variable' => 'country',
                'name' => 'Country',
                'type' => 'select',
            ],
            [
                'variable' => 'password',
                'name' => 'Password',
                'type' => 'password',
            ],
            [
                'variable' => 'confirm_password',
                'name' => 'Confirm password',
                'type' => 'password',
            ]
        ];

        $stat = $this->validate_input($inputs);

        if ($stat['status']) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $username = $_POST['username'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $country = $_POST['country'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if ($password == $confirm_password) {
                $mobile_reg = "/^(?:\d{10}|\+\d{11})$/";
                if (preg_match($mobile_reg, $mobile)) {
                    $username = strtolower($username);
                    $username = trim($username);
                    $username_reg = "/^[a-zA-Z0-9]+$/";

                    if (preg_match($username_reg, $username)) {
                        $data = [
                            'first_name' => $first_name,
                            'last_name' => $last_name,
                            'username' => $username,
                            'email' => $email,
                            'mobile' => $mobile,
                            'country' => $country,
                            'password' => $password,
                        ];
                        $model_result = $this->model_holder->signup_process($data);

                        if ($model_result['status']) {
                            $response['status'] = 'success';
                        } else {
                            $response['status'] = 'error';
                            $response['message'] = $model_result['message'];
                        }
                    } else {
                        $response['status'] = 'error';
                        $response['message'] = 'Please enter a valid username';
                    }
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Please enter a valid mobile number';
                }
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Password does not match';
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = $stat['message'];
        }

        echo json_encode($response);
    }

    private function validate_input($inputs)
    {
        $stat = [
            'status' => true,
            'message' => '',
        ];
        foreach ($inputs as $input) {
            if ($input['type'] == "text") {
                if (isset($_POST[$input['variable']]) && !empty($_POST[$input['variable']])) {
                    $stat['status'] = true;
                } else {
                    $stat['status'] = false;
                    $stat['message'] = "Please enter " . $input['name'];
                    break;
                }
            } else if ($input['type'] == "email") {
                if (isset($_POST[$input['variable']]) && !empty($_POST[$input['variable']])) {
                    if (filter_var($_POST[$input['variable']], FILTER_VALIDATE_EMAIL)) {
                        $stat['status'] = true;
                    } else {
                        $stat['status'] = false;
                        $stat['message'] = "Please enter a valid " . $input['name'];
                        break;
                    }
                } else {
                    $stat['status'] = false;
                    $stat['message'] = "Please enter " . $input['name'];
                    break;
                }
            } else if ($input['type'] == "select") {
                if (isset($_POST[$input['variable']]) && !empty($_POST[$input['variable']])) {
                    if ($_POST[$input['variable']] != "0") {
                        $stat['status'] = true;
                    } else {
                        $stat['status'] = false;
                        $stat['message'] = "Please select " . $input['name'];
                        break;
                    }
                } else {
                    $stat['status'] = false;
                    $stat['message'] = "Please select " . $input['name'];
                    break;
                }
            } else if ($input['type'] == "password") {
                if (isset($_POST[$input['variable']]) && !empty($_POST[$input['variable']])) {
                    if ($this->validate_password($_POST[$input['variable']])) {
                        $stat['status'] = true;
                    } else {
                        $stat['status'] = false;
                        $stat['message'] = "Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one number, and one special character.";
                        break;
                    }
                } else {
                    $stat['status'] = false;
                    $stat['message'] = "Please enter " . $input['name'];
                    break;
                }
            }
        }

        return $stat;
    }

    private function validate_password($password)
    {
        $status = true;
        $reg = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,12}$/";

        if (!preg_match($reg, $password)) {
            $status = false;
        }

        return $status;
    }
}
