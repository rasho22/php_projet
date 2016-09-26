<?php

namespace Behat\Behat\Tester;

use Behat\Behat\Tester\DBSingleton;
use Behat\Behat\Tester\Role;
/**
* 
*/
class User {
	public $pseudo;
    public $email;
    public $pwd;
    public $role;
    public function __construct() 
    {
        
    }
    public function connect(){

        $requete = DBSingleton::getInstance();
        $sql = "SELECT * FROM user WHERE password = '?' AND pseudo = '?'";
        $statement = $requete->prepare($sql);
        $statement->execute(array($this->pwd,$this->pseudo));
    }
    public function setRole(Role $role){
        $this->role = $role;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }
    public function setPwd($pwd){
        $this->pwd = $pwd;
    }
    public function select(){
        $sql = "SELECT * FROM User WHERE Role = ?";
        $db = DBSingleton::getInstance();
        $statement = $db->prepare($sql);
        $result = $statement->execute(array($this->role->setId(2)));
       /*return $result->fetchAll();*/
    }
}



?>