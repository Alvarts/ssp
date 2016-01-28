<?php

require_once 'Model.php';


class Dvd extends Model
{
    public function fetchAll()
    {
        $get = $this->pdo->query('SELECT * FROM dvds');
        return $get->fetchAll();
    }


}