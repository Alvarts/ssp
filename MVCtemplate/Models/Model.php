<?php

class Model {

    protected $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;port=8889; dbname=dvd', 'root', 'root',
                array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            var_dump($e);
            die('Could not connect to the database');
        }
    }


}