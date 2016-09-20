<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Tester\User;
use Behat\Behat\Tester\DBconnection;

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
        //$arg1 = 'Modérateur';
        if($arg1 == 'Modérateur' || $arg1== 'Super Admin') {
        //moderateur ou superadmin
            echo 'Connexion en cours ';
            $toto = new User ('toto','mail@mail.com','erwann');
            $toto->connect();
        }
        else {
           echo 'vous êtes un visiteur non connecter';
        }
    }

    /**
     * @When je clique sur un bloc
     */
    public function jeCliqueSurUnBloc()
    {
        throw new PendingException();
    }

    /**
     * @Then le bloc s'agrandit
     */
    public function leBlocSAgrandit()
    {
        throw new PendingException();
    }


}