<?php

class Database
{
    public $host = '127.0.0.1';
    public $dbname = 'users-management';
    public $username = "";
    public $password = "";

    public $connection = null;

    public function connect($user, $password)
    {
        $this->username = $user;
        $this->password = $password;

        $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);

        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}