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
    public function setRole(Role $role){
        $this->role = $role;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }
    public function setPwd($pwd){
        $this->pwd = $pwd;
    }
    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }
    public function connect(){
        $requete = DBSingleton::getInstance();
        $sql = "SELECT * FROM user WHERE password = :pwd AND pseudo = :pseudo AND mail = :mail";
        $statement = $requete->prepare($sql);
        $statement->bindParam(':pseudo', $this->pseudo);
        $statement->bindParam(':pwd', $this->pwd);
        $statement->bindParam(':mail', $this->mail);
        $statement->execute();
        /*print_r($statement->errorInfo());*/
        if($statement->rowCount() > 0){
            echo "\n\033[0;33m Utilisateur existant\n";
        } 
        else {
            echo "\n\033[1;31m Utilisateur non existant\n";
        }
    }
    public function addModo(){
        $requete = DBSingleton::getInstance();
        $addsql = "INSERT INTO user (pseudo, password, mail, role) VALUES ('youness', 'yoseboss', 'yose@yose.com', 2)";
        $statement = $requete->prepare($addsql);
        $statement->execute(array($this->pwd,$this->pseudo,$this->email,$this->role));
    }
    public function select(){
        $sql = "SELECT * FROM user WHERE role = '?'";
        $db = DBSingleton::getInstance();
        $statement = $db->prepare($sql);
        $result = $statement->execute(array($this->role->setId(2)));
       /*return $result->fetchAll();*/
    }
}



?>