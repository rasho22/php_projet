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
    public function create(){

        //FIXME : Check if it is a valid user
        // if($this->isValid())
        $requete = DBSingleton::getInstance();
        $addsql = "INSERT INTO user (pseudo, password, mail, role) VALUES (?,?,?,?)";
        $params = array(
            $this->pseudo,
            $this->pwd,
            $this->email,
            $this->role->getId());
        $statement = $requete->prepare($addsql);
        $statement->execute($params);
    }
    public function select(){
        $sql = "SELECT * FROM user WHERE role = ?";
        $db = DBSingleton::getInstance();
        $statement = $db->prepare($sql);
        $statement->execute(array($this->role->getId()));

        if($statement->errorCode()!="00000"){
            var_dump($statement->errorInfo());
            throw new \Exception("Impossible to select user");
        }
        return $statement->fetchAll();
    }
}
?>