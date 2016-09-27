<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Tester\User;
use Behat\Behat\Tester\DBSingleton;
use Behat\Behat\Tester\Bloc;
use Behat\Behat\Tester\Role;

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
        

        if($arg1 != "Visiteur"){
            $u = new User();
            $u->setRole(new Role($arg1));
            $result = $u->select();
            if(count($result)==0){
                throw new \Exception("Apparemment je n'ai pas eu de user selectionné");
            }

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
        if($arg1 == "Super Admin"){
            $user = new User();
            $user->setPseudo('toto');
            $user->setPwd('erwann');
            $user->setMail('mail@mail.com');
            $user->connect();
        }
        else{
            // par défaut visiteur
            echo "Non";
        }
    }
    /**
     * @When je deviens :arg1
     */
    public function jeDeviens($arg1)
    {
        $arg1 = true;
    }



    /**
     * @Given je suis connecté en tant que :arg1
     */
    public function jeSuisConnecteEnTantQue($arg1)
    {
        if($arg1 == "Super Admin"){
            $user = new User();
            $user->setPseudo('toto');
            $user->setPwd('erwann');
            $user->setMail('mail@mail.com');
            $user->connect();
        }
        else{
            // par défaut visiteur
        }
    }
    /**
     * @When je creé un compte :arg1
     */
    public function jeCreeUnCompte($arg1)
    {
        /*$conn = new User();
        $conn->create();*/
    }
    /**
     * @Then je peux ajouter une permission editer au compte :arg1
     */
    public function jePeuxAjouterUnePermissionEditerAuCompte($arg1)
    {
        $arg1 = true;
    }

}
