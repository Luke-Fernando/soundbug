<?php
class Model
{

    protected $env;
    protected $connection;

    public function __construct()
    {
        $this->env = new Environment();
        $this->set_connection();
    }

    private function set_connection()
    {
        if (!isset($this->connection)) {
            $host = $this->env->get_env("DB_HOST");
            $username = $this->env->get_env("DB_USERNAME");
            $password = $this->env->get_env("DB_PASSWORD");
            $database = $this->env->get_env("DB_NAME");
            $port = $this->env->get_env("DB_PORT");
            try {
                $this->connection = new mysqli($host, $username, $password, $database, $port);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }

    public function iud($query, $paraArr)
    {
        $stmt = $this->connection->prepare($query);
        $paramTypes = str_repeat('s', count($paraArr));
        if (!empty($paraArr)) {
            try {
                $stmt->bind_param($paramTypes, ...$paraArr);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        $stmt->execute();
    }

    public function search($query, $paraArr)
    {
        $stmt = $this->connection->prepare($query);
        $paramTypes = str_repeat('s', count($paraArr));
        if (!empty($paraArr)) {
            try {
                $stmt->bind_param($paramTypes, ...$paraArr);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
