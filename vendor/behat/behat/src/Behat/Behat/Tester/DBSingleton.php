<?php

namespace Behat\Behat\Tester;
/**
* 
*/
/*class DBconnection {

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
*/
class DBSingleton
{
	private $inst = NULL;
	private $connection = FALSE; //connection to be opened  //DB connection values
	private $server = NULL; private $usr = NULL; private $psw = NULL; private $name = NULL; 
	 
	public static function getInstance($db_server, $db_usr, $db_psw, $db_name)
	{
	    //simply stores connections values, without opening connection  

		if($inst === NULL)
	    	$this->inst = new DBSingleton();
	    	return $this->inst;
	}
	private __construct()...

	public function query($query_string)
	{
	    //performs query over already opened connection, if connection is not open, it opens connection 1st
	}
}

?>