

<?php  

 class Person { //Person is the object of the class

     public $firstName; //Class properties. Must be declared as public or private
     public $lastName;
     public $age;
     public $job;
     public $nationality;
     public $street;
     public $houseNumber;
     public public $city;
     
     Public function __construct($firstName, $lastName, $age, $job, $nationality, $street, $houseNumber, $city){ //Magic Method. 

        $this->firstName   = $firstName;
        $this->lastName    = $lastName;
        $this->age         = $age;
        $this->job         = $job;
        $this->nationality = $nationality;
        $this->street      = $street;
        $this->houseNumber = $houseNumber;
        $this->city        = $city;
  } 
  
      Public function sayHello() {
        return "Hello, my name is " . $this->firstName . " ". $this->lastName. ". I'm" . " " . $this->age . " " . "years old.";
     }
  
    Public function whatDoYouDo() {
        return "My name is " . $this->firstName . "." . "I'm a $this->job" . ".";
     }

    Public function whereAreYouFrom() {
        return "I'm a " . $this->job . " " . "from" . " " . $this->nationality; 
     }

    Public function myAdress(){
        return "I live in " . $this->street . " " . "street, number". " " . $this->houseNumber . ".";
    }

 }

$marcela = new Person('Marcela', 'Charchar', '39', 'journalist', 'Brazil', 'Horta', '11', 'Cerdanyola');
 echo $marcela->sayHello();
 echo $marcela->whatDoYouDo();
 echo $marcela->whereAreYouFrom();
 echo $marcela->myAdress();

?>

