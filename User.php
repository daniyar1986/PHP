<?php


class User
{
    public $name = "Name";
    public $password = "Password";
    public $email = "Email";
    public $city = "City";

}

$admin = new User();
$user1 = new User();

$admin->name = "Danik";
$user1->name = "Moldir";

echo $admin->name;
echo $user1->name;
$user1->surname = "Myrzakanov";
echo $user1->surname;

