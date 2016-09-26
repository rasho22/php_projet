<?php

namespace Behat\Behat\Tester;

use Behat\Behat\Tester\DBSingleton;
/**
* 
*/
class Role {

	private $id;
	private $type;

	public function __construct($name) {
		if(is_string($name)){
			$this->type = $name;
		}
	}
	public function setId($id){
		$this->id = $id;
    }
    public function setType($type){
    	$this->type = $type;
    }
}

?>