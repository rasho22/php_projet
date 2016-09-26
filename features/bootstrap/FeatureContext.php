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
     * @Given je suis :arg1
     */
    public function jeSuis($arg1)
    {   
        $this->modo = new Role($arg1);



        if($arg1 != "Visiteur"){
            $u = new User();
            $u->setRole($this->modo);
            $u->select();
        
            $user = new User ();
            $user->setMail('moi@moi.com');
            $user->setPseudo('jo');
            $user->setPwd('tyjow');
            $user->connect();
        }
        else{
            // par défaut visiteur
            echo "Vous êtes " . $arg1;
        }
    }

    /**
     * @When j'accède à mon compte :arg1
     */
    public function jAccedeAMonCompte($arg1)
    {
        if($arg1 == "Modérateur"){
            $user = new User ('jo','moi@moi.com','tyjow');
            $user->connect();
        }
        else{
            // par défaut visiteur
        }
    }

    /**
     * @When je deviens :arg1
     */
    public function jeDeviens($arg1)
    {
        $arg1 = true;
    }

}
