<?php

class bdd
{

    private $bdd;

    public function connect()
    {
        try {

            $this->bdd = new PDO("mysql:host=localhost;dbname=bdd-test", 'root', '');
            return $this->bdd;

        } catch (PDOException $e) {

            $error = fopen("error.log", "w");
            $txt = $e . "\n";
            fwrite($error, $txt);
            throw new Exception("error");

        }

    }

    public function disconnect(){
        $this->bdd = null;
    }

    public function getAll(){

        $sql = "SELECT * FROM ufc";
        $done = $this->bdd->query($sql);
        return $done->fetchAll(PDO::FETCH_ASSOC);

    }

}
