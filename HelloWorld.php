<?php

class HelloWorld
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function hello($what = 'World')
    {
        $stmt = $db->prepare("INSERT INTO hello VALUES (:what)");
        $stmt->bindValue(":what", $what);
        $stmt->execute();
        $stmt->rowCount();
        return "Hello $what";
    }


    public function what()
    {
        $sql = "SELECT what FROM hello";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
}
