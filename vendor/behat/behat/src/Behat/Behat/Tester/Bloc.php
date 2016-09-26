<?php

namespace Behat\Behat\Tester;

use Behat\Behat\Tester\DBSingleton;
/**
* 
*/
class Bloc {

	public $titre;
	public $date;
	public $video;
	public $image;
	public $audio;

	public function __construct() 
    {
        
        
    }

    public function setTitre($titre){
		$this->titre = $titre;
    }
    public function setDate($date){
    	$this->date = $date;
    }
    public function setAudio($audio){
        $this->audio = $audio;
    }
    /*public function select(){
    	$db = DBSingleton::getInstance();
    	/*echo $this->date->format('d/m/Y');
    	$sql = "SELECT * FROM Bloc WHERE DATE_FORMAT(date, '%d/%m/%Y') = ?";
    	"SELECT DATE_FORMAT(date, '%d/%m/%Y') as date FROM Bloc WHERE DATE_FORMAT(date, '%d/%m/%Y') = ?"
    	$statement = $db ->prepare($sql);
        $statement->execute(array($this->date->format('d/m/Y')));
        return $statement->fetchAll();
    }*/
    public function select(){
       $db = DBSingleton::getInstance();
       $sql = "SELECT * FROM Bloc WHERE audio = ?";
       $statement = $db ->prepare($sql);
       $statement->execute(array($this->audio));
       return $statement->fetchAll();
    }
}




?>