<?php

namespace Behat\Behat\Tester;
/**
* 
*/
class DBconnection {

    public static function db() {

        try {
            $database = new PDO('mysql:host=127.0.0.1;dbname=spa', 'root', 'facesimplon');
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        return $database;

    }
}



?>