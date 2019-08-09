<?php

class Database
{
    public static $pdo;

    public static function get()
    {   if(null === self::$pdo)
        { // On s'assure avec la condition if que la connexion à la base de donnée se fait une seule fois
            $this->pdo = new PDO('mysql:host=localhost;dbname=wf3_superheroes;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING 
            ]);
        }

        return self::$pdo;
    }
}





