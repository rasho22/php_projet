<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Tester\User;
use Behat\Behat\Tester\DBconnection;
use Behat\Behat\Tester\Bloc;

/**
 * Defines application features from the specific context.
 */

class FeatureContext implements Context, SnippetAcceptingContext
{
    private $bloc;
    private $result;
    /**
     * @Given je filtre sur la date :arg1
     */
    public function jeFiltreSurLaDate($arg1)
    {
        $d = DateTime::createFromFormat('d/m/Y', $arg1);
        $this->bloc = new Bloc();
        $this->bloc->setDate($d);
        $this->result = $this->bloc->select();
    }

    /**
     * @When un bloc existe avec la date :arg1
     */
    public function unBlocExisteAvecLaDate($arg1)
    {
        if(!count($this->result) == 1){
            throw new Exception("Did not find one result but ". count($this->result));
        }
    }

    /**
     * @Then je vois un seul bloc
     */
    public function jeVoisUnSeulBloc()
    {
        print_r($this->result);
    }
}
