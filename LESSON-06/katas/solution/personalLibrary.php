<?php


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

class NovelBook extends Book{

    public $literaryCurrent;

    public function __construct($literaryCurrent, $title, $author, $pageNumber, $sumary, $coverDescription){
        $this->literaryCurrent = $literaryCurrent;

        parent::__construct($title, $author, $pageNumber, $sumary, $coverDescription);
    }

    public function getLiteraryCurrent(){
        return $this->literaryCurrent;
    }
}

class AdventureBook extends Book{

    public $ageRange;
    
    public function __construct($ageRange, $title, $author, $pageNumber, $sumary, $coverDescription) {
        $this->ageRange = $ageRange;

        parent::__construct($title, $author, $pageNumber, $sumary, $coverDescription);
    }

    public function getAgeRange(){
        return $this->ageRange;
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
