<?php
class Environment
{

    protected static $dotenv;

    public static function init()
    {
        try {
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();
        } catch (\Throwable $ex) {
            throw new Exception($ex->getMessage());
        }
    }

    public static function get_env($key)
    {
        if (self::$dotenv == null) {
            self::init();
        }
        return $_ENV[$key];
    }
}
