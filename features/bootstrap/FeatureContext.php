<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Tester\User;
use Behat\Behat\Tester\DBconnection;
use Behat\Behat\Tester\Block;

/**
 * Defines application features from the specific context.
 */

class FeatureContext implements Context, SnippetAcceptingContext
{
   /**
     * @Given je filtre sur le titre :arg1
     */
    public function jeFiltreSurLeTitre($arg1)
    {
        if($titre = "bla") {
            $reqTitre = new Block('bla', '30/07/1997');
            $reqTitre->connect();
            echo 'non';
        }   
    }

    /**
     * @When un bloc existe avec le titre :arg1
     */
    public function unBlocExisteAvecLeTitre($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then je vois un seul bloc
     */
    public function jeVoisUnSeulBloc()
    {
        throw new PendingException();
    }



}