<?php


/**
 *  The following class is a user Class and has only one Method hello() that echoes Hello to the STDOUT
 *  You are asked to:
 *  1. Make hello() method personalised so it says hello <<username>> instead, for example if the name is "Pepito", it shall say: Hello Pepito,
 *     Think about how are you supposed to assign $name a value being private ... you are only allow to create new methods, modify permissions is not
 *     Allowed.
 */
Class User {

    private $name;
    private $lastName;

    public function hello(){
        return 'hello';
    }
}

/**
 *  See how here the class is being actually used ...
 */
$user = new User();
echo $user->hello();