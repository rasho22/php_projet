<?php

namespace Behat\Behat\Tester;

use Behat\Behat\Tester\DBSingleton;
/**
* 
*/
class User {
	public $pseudo;
    public $email;
    public $pwd;
    public function __construct($pseudo, $email, $pwd) 
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->pwd = $pwd;
        
    }
}



?>