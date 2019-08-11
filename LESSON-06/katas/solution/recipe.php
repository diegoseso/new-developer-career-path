<?php

class Recipe{
    public $recipeName;
    public $meal;
    public $origin;

    public function __construct($recipeName, $meal, $origin){
        $this->recipeName  = $recipeName;
        $this->meal        = $meal;
        $this->origin      = $origin;
    }

    public function getRecipeName(){
        return $this->recipeName;
    }

    public function getMeal(){
        return $this->meal;
    }

    public function getOrigin(){
        return $this->origin;
    }
}

 class FirstDish extends Recipe{
    public $type;

    public function __construct($type, $recipeName, $meal, $origin){
        $this->type = $type;

        parent::__construct($recipeName, $meal, $origin);
    }

    public function getType(){
        return $this->type;
    }

 }
 
 $tiramisu = new FirstDish ('Cold', 'Tiramisu', 'Dessert', 'Italy');
 echo $tiramisu->getTypee();
 
?>
