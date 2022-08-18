<?php
// classes

class User{
    
    public $email;
    public $name;

    public function login (){
        echo 'the user logged in';
    }

}

$userOne = new User()

$userOne->login();
echo $userOne->name;


?>