<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat \ Behat \ Exception \ PendingException ;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class adresseDuSite {

}


class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @Given je tape l':arg1 du site
     */
    public function jeTapeLDuSite($arg1)
    {
        $site = new adresseDuSite("URL");
    }

    /**
     * @When j'accède à la page :arg1
     */
    public function jAccedeALaPage($arg1)
    {
        $site = new adresseDuSite("URL");
    }

    /**
     * @Then je vois l'ensemble des :arg1
     */
    public function jeVoisLEnsembleDes($arg1)
    {
        $site = new adresseDuSite("URL");
    }


}
