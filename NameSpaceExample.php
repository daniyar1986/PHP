
<?php
require_once 'User.php';

$user = new \Home\User("Danik","Danik2","dan_ntu@mail.ru","Almaty");
echo $user->getInfo();

use Home\Moderator as Moder;
new Moder();