<?php


class User{
    public $name = "Nahin Developer";

    public function changeName($name){
        $this -> name = $name;
    }
}


$user = new User();

echo $user->name;

echo "\n";

$user->changeName('Developer Nahin');

echo $user-> name;
