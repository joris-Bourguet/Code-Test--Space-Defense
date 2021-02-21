<?php


class DataBase
{

    private $login;

    private $password;

    private $dbname;

    public function __construct(
        $dbname = "fleet",
        $login = "root",
        $password = ""
    ) {
        $this->dbname = $dbname;
        $this->login = $login;
        $this->password = $password;
        $this->connect();
    }

    public function connect(): PDO
    {
        try {
            return new PDO(
                'mysql:host=localhost;dbname='.$this->dbname,
                $this->login,
                $this->password
            );
        } catch (PDOException $exception) {
            $error = $exception->getMessage();
            die($error);
        }
    }

}

