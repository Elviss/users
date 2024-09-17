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

    public function fetchAll()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connection->query($sql);

        return $stmt->fetchAll(PDO::FETCH_NUM);
    }

    public function create($name, $email)
    {
        $sql = "INSERT INTO users (nome, email) VALUES (:name, :email)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);

        if (!$stmt->execute()) {
            return "Error: Ocorreu um erro ao executar a query!";
        }

        return "Novo usuário inserido com sucesso!";
    }
}