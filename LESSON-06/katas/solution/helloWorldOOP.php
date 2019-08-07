<?php

Class User {
    public $name;
    public $lastName;

    public function __construct($name, $lastName){
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function hello(){
        return "Hello" . " " . $this->name . " " . $this->lastName;
    }
}

$pepito = new User('Pepito', 'Lopez');

echo $pepito->hello();

?>