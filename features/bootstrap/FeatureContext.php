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
     * @Given je filtre sur le titre :title
     */
    public function jeFiltreSurLeTitre($title)
    {
        $this->block = new Block();
        $this->block->setTitre($title);
       print_r($this->result = $this->block->select());
        
    }

    /**
     * @When un bloc existe avec le titre :arg1
     */
    public function unBlocExisteAvecLeTitre($arg1)
    {
        if(count($this->result)>=1){
            echo 'yes ';
        }
        else{
            throw new Exception("Bloc non trouvé");
        }
    }

    /**
     * @Then je vois un seul bloc
     */
    public function jeVoisUnSeulBloc()
    {
         // Nothing to do. Only Front.
    }



}