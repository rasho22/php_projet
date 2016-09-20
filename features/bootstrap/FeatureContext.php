<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Tester\User;
use Behat\Behat\Tester\DBconnection;
use Behat\Behat\Tester\Block;
use Behat\Behat\Tester\DBsingleton;

/**
 * Defines application features from the specific context.
 */

class FeatureContext implements Context, SnippetAcceptingContext
{
    private $block;
    private $result;
    private $title = array();
    
    /**
     * @Given je filtre sur le titre :arg1
     */
    public function jeFiltreSurLeTitre($arg1)
    {
        //$d = DateTime::createFromFormat('d/m/Y', $arg1);
        $this->block = new Block();
        //$this->bloc->setDate($d);
       print_r($this->result = $this->block->select());
        
    }

    /**
     * @When un bloc existe avec le titre :arg1
     */
    public function unBlocExisteAvecLeTitre($arg1)
    {
        //print_r($this->result);
   		foreach($this->result as $Titre)
        {
            if($Titre === 'Aicha') {
                echo 'yes';
            }
            else {
                echo 'non';
            }
        }
        
        /*foreach($result as $title){
            if($this->result === 'Musique face' ){
                echo 'youness';   
            }
            else {
                echo 'abdul';
            }
        }*/
    }

    /**
     * @Then je vois un seul bloc
     */
    public function jeVoisUnSeulBloc()
    {
        throw new PendingException();
    }



}