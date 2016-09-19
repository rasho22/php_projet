<?php

namespace Behat\Behat\Tester;
/**
* 
*/

class DBSingleton
{
 private static $inst = NULL;
 private $connection = FALSE; //connection to be opened

 //DB connection values
 private $server = NULL; private $usr = NULL; private $psw = NULL; private $name = NULL;

 public static function getInstance()
 {
    //simply stores connections values, without opening connection

    if(self::$inst === NULL)
       new DBSingleton();
    return self::$inst;
 }
 private function __construct() {
 	$db_server = "localhost";
 	$db_usr = "root";
 	$db_psw = "facesimplon";
 	$db_name = "testmixite";
	 try{
		self::$inst = new \PDO("mysql:host=$db_server;dbname=$db_name",$db_usr,$db_psw);
		
		echo 'connexion à la base de donnée réussie!';
	}
	catch (Exception $e){
		echo 'Echec de la connection : '.$e->getMessage();

	}
}

public function query($query_string)
 {
    //performs query over already opened connection, if connection is not open, it opens connection 1st
    $this->dbco = DBSingleton::getInstance();
 }

}
?>