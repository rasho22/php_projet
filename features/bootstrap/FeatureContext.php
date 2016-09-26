<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Tester\User;
use Behat\Behat\Tester\DBconnection;
use Behat\Behat\Tester\Bloc;
use Behat\Behat\Tester\Role;

/**
 * Defines application features from the specific context.
 */


class FeatureContext implements Context, SnippetAcceptingContext
{

    private $modo;
    /**
     * @Given je suis connecté en tant que :arg1
     */
    public function jeSuisConnecteEnTantQue($arg1)
    {
        $this->modo = new Role($arg1);

        if($arg1 == "Modérateur"){
            $u = new User();
            $u->setRole($this->modo);
            $u->select();
        
            /*$user = new User ();
            $user->setMail('moi@moi.com');
            $user->setPseudo('jo');
            $user->setPwd('tyjow');
            $user->connect();*/

            echo "\nVous êtes Modérateur";
        }
        else{
            // par défaut visiteur
            echo "Vous êtes Visiteur";
        }
    }

    /**
     * @When j'ajoute un bloc
     */
    public function jAjouteUnBloc()
    {
        throw new PendingException();
    }

    /**
     * @Then je peux changer la taille de ce bloc
     */
    public function jePeuxChangerLaTailleDeCeBloc()
    {
        throw new PendingException();
    }

}
