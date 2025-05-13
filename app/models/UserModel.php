<?php
class UserModel extends Model
{
    public function __construct()
    {
        // parent::__construct();
    }

    public function signup_proccess($data)
    {
        extract($data);
        $result = [
            'status' => true,
            'message' => '',
        ];

        $username_resultset = $this->search("SELECT * FROM user WHERE username = ?;", [$username]);
        $username_num_rows = $username_resultset->num_rows;
        if ($username_num_rows == 0) {
            $email_resultset = $this->search("SELECT * FROM user WHERE email = ?;", [$email]);
            $email_num_rows = $email_resultset->num_rows;
            if ($email_num_rows == 0) {
                $country_resultset = $this->search("SELECT * FROM country WHERE id = ?;", [$country]);
                $country_num_rows = $country_resultset->num_rows;
                if ($country_num_rows == 1) {
                    $password = $this->hash_password($password);
                    $this->iud(
                        "INSERT INTO user (`username`, `email`, `first_name`, `last_name`, `password`, `mobile_no`, `country_id`, `profile_picture_id`) 
                    VALUES (?,?,?,?,?,?,?,?);",
                        [$username, $email, $first_name, $last_name, $password, $mobile, $country, "1"]
                    );
                    $result['status'] = true;
                } else {
                    $result['status'] = false;
                    $result['message'] = "Invalid country";
                    return $result;
                }
            } else {
                $result['status'] = false;
                $result['message'] = "Email already exists";
            }
        } else {
            $result['status'] = false;
            $result['message'] = "Username already exists";
        }

        return $result;
    }

    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}
