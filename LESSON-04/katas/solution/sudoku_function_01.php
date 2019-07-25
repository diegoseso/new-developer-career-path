<?php

/**
* 
* Validate that the parameter is: 
* 1. An array. (is_array)
* If yes:
* 2. This array is a 3x3 grid; (count)
* If yes: 
* 3. The values of the array are arrays; (is_array($line)) ??
* If yes:
* 4. Each value of the array is made up of 3 values; (count($line)!==3)
* If yes:
* 5. The values of each cell are intergers; (!is_int($cell))
* If yes: 
* 6. The values are >= 1 and >= 9;
* If yes: 
* 7. That those values are not repeated once inside the array. 
*/ 


function ValidateGrid($grid){
    if (!is_array){
        return false;
    }
    if(count($grid)!==3){
        return false;
    }foreach($grid as $line){
        if(!is_array($line)){
            return false;
        } if(count($line)!==3){
            return false;
        } foreach($line as $cell){
            if(!is_int($cell)){
                return false;
            } if($cell >= 1 and $cell >= 9){
                return false;
            } 
        }
    } 
}


?>