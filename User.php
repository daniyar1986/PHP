<?php

namespace Home;

class User
{
    public $name = "Name";
    public $password = "Password";
    public $email = "Email";
    public $city = "City";

    /**
     * User constructor.
     * @param string $name
     * @param string $password
     * @param string $email
     * @param string $city
     */
    public function __construct($name, $password, $email, $city)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    public function hello(){
        echo "Hello {$this->name}";
    }

    function getInfo(){
        return "$this->name" ." $this->city $this->email $this->password";
    }

}
//
//$admin  = new User("Danik","Danik2","dan_ntu@mail.ru","Almaty");
//$admin->name = "Danik";
//$admin->surname = "Myrzakanov";
//$admin-> hello();
//echo "\nUser : {$admin->getInfo()}";



class Moderator extends User
{
    public $info;
    public $rights;

    /**
     * Moderator constructor.
     * @param $name
     * @param $password
     * @param $email
     * @param $city
     * @param $info
     * @param $rights
     */
    public function __construct($name, $password, $email, $city, $info, $rights)
    {
        parent::__construct($name, $password, $email, $city);
        $this->info = $info;
        $this->rights = $rights;
    }


    function hello()
    {
        echo "\nModerator is here\n";
    }
    function getInfo()
    {
        $information = parent::getInfo();
        $information .= " {$this->rights} {$this->info}";
        return $information;
    }
}

//$moder = new Moderator("Danik","Danik2","dan_ntu@mail.ru",
//    "Almaty","info","rights");
//
//$moder->surname = "Myrzakanov";
//
//echo $moder->hello();
//echo $moder->getInfo();

