<?php
namespace Behat\Behat\Tester;
use Behat\Behat\Tester\DBSingleton;
/**
*
*/
class Block {    
    public $titre;
    public $date;
    public $video;
    public $image;
    public $audio;
    
        public function __construct() {

        }    
        
        public function setTitre($titre) {
		  $this->titre = $titre;
        }
    
        public function select(){
    	$db = DBSingleton::getInstance();
    	$sql = "SELECT Titre FROM Block";
        if(!is_null($this->titre)){
            $sql .= " WHERE Titre = ?";
        }
    	$statement = $db ->prepare($sql);
        $statement->execute(array($this->titre));
        return $statement->fetchAll();
    }
}
?>