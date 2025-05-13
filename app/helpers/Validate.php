<?php
class Validate
{
    public static function validate($data)
    {
        $data = trim($data);
        return $data;
    }

    public static function validate_email($email)
    {
        $status = true;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = false;
        }

        return $status;
    }

    public static function validate_password($password)
    {
        $status = true;
        $reg = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,12}$/";

        if (!preg_match($reg, $password)) {
            $status = false;
        }

        return $status;
    }

    public static function hash_password($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function validate_name($name)
    {
        $name = Validate::validate($name);
        $status = true;
        $reg = "/^[a-zA-Z]+$/";

        if (!preg_match($reg, $name)) {
            $status = false;
        }

        return $status;
    }

    public static function capitalize($string)
    {
        return ucfirst($string);
    }
}
