<?php
class Database{
    private $host;
    private $user;
    private $pass;
    private $dbname;

    public function db_connect(){
        $this->host='localhost';
        $this->user='id17481441_db_user';
        $this->pass='3vgPmtx4{kQSHZLX';
        $this->dbname='id17481441_products';

        try {
            $dsn='mysql:host='.$this->host.';dbname='.$this->dbname;
            $pdo= new PDO($dsn,$this->user,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            echo 'Connection Failed: '.$e->getMessage();
        }
    }
}