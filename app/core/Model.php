<?php
class Model
{

    protected $connection;

    public function set_connection()
    {
        if (!isset($this->connection)) {
            $host = Environment::get_env("DB_HOST");
            $username = Environment::get_env("DB_USERNAME");
            $password = Environment::get_env("DB_PASSWORD");
            $database = Environment::get_env("DB_NAME");
            $port = Environment::get_env("DB_PORT");
            try {
                $this->connection = new mysqli($host, $username, $password, $database, $port);
            } catch (Exception $ex) {
                throw new Exception($ex->getMessage());
            }
        }
    }

    public function iud($query, $paraArr)
    {
        if ($this->connection == null) {
            $this->set_connection();
        }
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
        if ($this->connection == null) {
            $this->set_connection();
        }
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
