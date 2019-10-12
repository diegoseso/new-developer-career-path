<?php

interface humorousBook{
    public function containsHumor();
}

class Book{
    public $title;
    public $author;
    public $pageNumber;
    public $sumary;
    public $coverDescription;

    public function __construct($title, $author, $pageNumber, $sumary, $coverDescription){
        $this->title            = $title;
        $this->author           = $author;
        $this->pageNumber       = $pageNumber;
        $this->sumary           = $sumary;
        $this->coverDescription = $coverDescription;
    }

}

class NovelBook extends Book implements humorousBook{ //first extends, than implements

    public $literaryCurrent;

    public function __construct($literaryCurrent, $title, $author, $pageNumber, $sumary, $coverDescription){
        $this->literaryCurrent = $literaryCurrent;

        parent::__construct($title, $author, $pageNumber, $sumary, $coverDescription);
    }

    public function getLiteraryCurrent(){
        return $this->literaryCurrent;
    }
    
    public function containsHumor(){
    
    }
}

class AdventureBook extends Booki implements humorousBook{

    public $ageRange;
    
    public function __construct($ageRange, $title, $author, $pageNumber, $sumary, $coverDescription) {
        $this->ageRange = $ageRange;

        parent::__construct($title, $author, $pageNumber, $sumary, $coverDescription);
    }

    public function getAgeRange(){
        return $this->ageRange;
    }
    
    public function containsHumor(){
    
    }
}

class BiographyBook extends Book{
    
    private $subjectName;

    private function __construct ($subjectName, $title, $author, $pageNumber, $sumary, $coverDescription ){
        $this->subjectName = $subjectName;

        parent::__construct($title, $author, $pageNumber, $sumary, $coverDescription);
    }

    private function subjectName(){
        return $this->subjectName;
    } 

    private function isAutoBiography (){
        if ($author !== $subjectName){
            return false;
        }
    }
}




 ?>
