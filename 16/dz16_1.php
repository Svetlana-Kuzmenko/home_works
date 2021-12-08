<?php

class User{
    protected $name;
    public $age;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
class Buider{
    public static $counter=0;
    public static function createuser($name, $age){
        $user=new User();
        $user->setName($name);
        $user->age=$age;
        Buider::$counter++;
        return $user;
    }
}

$users=Buider::createuser('Slava', 25);
$users=Buider::createuser('Tony', 18);
$users=Buider::createuser('Daniel', 32);
$users=Buider::createuser('Brendon', 21);
$users=Buider::createuser('Vika', 12);
$users=Buider::createuser('Kristian', 34);

echo 'number of users:'.Buider::$counter;
