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
    
        public function __construct($titre, $date) {
            $this->Titre = $titre;
            $this->Date = $date;
        }    
   
        public function blocdate() {        
            $requete = DBSingleton::getInstance()->prepare("SELECT `Titre` FROM `Block` WHERE 1 ");
            $requete->execute(array($this->Titre,$this->Date));
        }  
}
?>