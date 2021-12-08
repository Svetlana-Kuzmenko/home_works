<?php

class User{
    public $first_name;
    protected $last_name;
    public $age;
    public function __construct($last_name)
    {
        $this->last_name = $last_name;
    }
    public function getName()
    {
        return $this->last_name;
    }
    public function __destruct()
    {
        echo 'объект ликвидирован'."\n";
    }
    public function __toString()
    {
        return $this->last_name;
    }
}
class Buider{
    public static $counter=0;
    public static function createuser($first_name, $last_name, $age){
        $user=new User($last_name);
        $user->first_name=$first_name;
        $user->age=$age;
        Buider::$counter++;
        return $user;
    }
}
$users1=Buider::createuser('Slava','Dark', 25);
$users2=Buider::createuser('Tony','Stark', 18);
$users3=Buider::createuser('Daniel','Storm', 32);

echo 'number of users:'.Buider::$counter."\n";

echo 'users#1:'."\n".$users1->first_name.','.$users1->getName().','.$users1->age."\n"
                    .$users2->first_name.','.$users2->getName().','.$users2->age."\n"
                    .$users3->first_name.','.$users3->getName().','.$users3->age."\n";

echo 'users#2:'."\n".$users1."\n"
                    .$users2."\n"
                    .$users3."\n";
//var_dump($users1, $users2, $users3);

