<?php


class User
{
    public $name = "Name";
    public $password = "Password";
    public $email = "Email";
    public $city = "City";

    public function hello(){
        echo "Hello {$this->name}";
    }

    function getInfo(){
        return "$this->name" ." $this->surname";
    }

}

$admin  = new User();
$admin->name = "Danik";
$admin->surname = "Myrzakanov";
$admin-> hello();
echo "\nUser : {$admin->getInfo()}";



