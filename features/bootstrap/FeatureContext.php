<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Tester\User;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @Given je suis :arg1
     */
    public function jeSuis($arg1)
    {
        /*$user = new User(1, 'toto', 'toto@toto.fr', 'erwann1');*/
        throw new PendingException();
    }

    /**
     * @When j'accède à la page Accueil
     */
    public function jAccedeALaPageAccueil()
    {
        throw new PendingException();
    }

    /**
     * @Then je vois l'ensemble des blocs
     */
    public function jeVoisLEnsembleDesBlocs()
    {
        throw new PendingException();
    }

}
