<?php

namespace Behat\Behat\Tester;

use Behat\Behat\Tester\DBSingleton;
/**
* 
*/
class Role {

	private $id;
	private $type;
	private $droits;

	public function __construct($name) {
		if(is_string($name)){
			$this->type = $name;
			$objects = $this->select();
			if(count($objects) == 1){
				$this->id = $objects[0]['id'];
				$this->droits = $objects[0]['droits'];
			}
		}
	}
	public function setId($id){
		$this->id = $id;
    }
    public function getId(){
    	return $this->id;
    }
    public function setType($type){
    	$this->type = $type;
    }
    public function setDroits($droits){
    	$this->droits = $droits;	
    }

    public function select(){
    	$sql = "SELECT * FROM Role ";
    	$params = array();
    	if(!is_null($this->id)){
    		$sql .= "WHERE id = ?";
    		array_push($params, $this->id);
    	}
    	
		else if(!is_null($this->type)){
    			$sql .= "WHERE type = ?";
				array_push($params, $this->type);		
    	}
        $db = DBSingleton::getInstance();

        $statement = $db->prepare($sql);
        $statement->execute($params);
        
        if($statement->errorCode() != "00000"){
        	print_r($statement->errorInfo());
        	throw new \Exception("Impossible to select in database. Please check log files");
        }


        return $statement->fetchAll(\PDO::FETCH_NAMED);


    }

}

?>