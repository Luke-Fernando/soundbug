<?php
class Environment
{

    protected $dotenv;

    private function __construct()
    {
        try {
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();
        } catch (\Throwable $ex) {
            throw new Exception($ex->getMessage());
        }
    }

    public function get_env($key)
    {
        return $_ENV[$key];
    }
}
