<?php

namespace Behat\Behat\Tester;

use Behat\Behat\Tester\DBconnection;
/**
* 
*/
class User {
	public $id;
	public $pseudo;
    public $email;
    public $pwd;
    public function __construct($id, $pseudo, $email, $pwd) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->dbConn = DBconnection::db();
    }
}



?>