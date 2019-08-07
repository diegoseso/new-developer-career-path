# Introduction

In this Lesson we explain the meaning of operators in programming, types
and usages.

# Lesson Index

* 2 Operators
* 2.1 Arithmetic Operators
* 2.2 Comparison operators.
* 2.3 Other operators.
* 2.4 Order in operation.
* 2.5 Testing operators.
* 2.6 Exercises.
* 2.7 Thoughts of an operator.

# 2 Operators
 
 Basically are used to perform operations on variables and values, sound as an easy thing
 but it is a powerful tool inside programming. Most of the time, the needs for transforming date
 are fulfilled by the combination of actions and operators in the code.

## 2.1 Arithmetic operators.
  In most programming languages arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

  Addition is represented by + symbol
  
    <?php 
    $x = 10;  
    $y = 6;
    echo $x + $y;
    ?>
  
  Will show 16 on the screen
  	
  Subtraction is represented by - symbol
  
    <?php 
    $x = 10;  
    $y = 6;
    echo $x - $y;
    ?>
  
  Will show 4 on the screen
  
  Multiplication is represented by * symbol
    
    <?php 
    $x = 10;  
    $y = 4;
    echo $x * $y;
    ?>
    
  Will show 40 on the screen	
  	
  Division is represented by / symbol
     
    <?php 
    $x = 10;  
    $y = 2;
    echo $x / $y;
    ?>
     
  Will show 5 on the screen 	
 
  Modulus is represented by % symbol
       
     <?php 
     $x = 10;  
     $y = 2;
     echo $x % $y;
     ?>
       
  Will show 0 on the screen	
  		
## 2.2 Comparison operators.

Comparison operators are used to compare two values

  "Equal" operator is represented by ==  it will return true if operands contain the same value
    
    <?php
    $x = 100;  
    $y = "100";
    
    var_dump($x == $y); 
    ?>
  	
  will echo true
  
  "Identical" operator is represented by === will return true if $x is equal to $y, and they are of the same type (This is only an operator available in php)

    <?php
    $x = 100;  
    $y = "100";
    
    var_dump($x == $y); 
    ?>
 
  will echo false

  "Not equal" operator is represented by !=  or also <>  Returns true if $x is not equal to $y			
  
      <?php
      $x = 100;  
      $y = 99;
      
      var_dump($x != $y); 
      ?>
  
  will echo true
  
  "Not identical" operator is represented by !== returns true if $x is not equal to $y, or they are not of the same type	
  
        <?php
        $x = 100;  
        $y = "100";
        
        var_dump($x !== $y); 
        ?>
  
  will echo true
  
  Greater than	is represented by >   returns true if $x is greater than $y
  
    <?php
    $x = 100;  
    $y = 99;
    
    var_dump($x > $y); 
    ?>
  
  will echo true  
  	
  "Less than" operator is represented by <   returns true if $x is less than $y

    <?php
    $x = 100;  
    $y = 99;
    
    var_dump($x < $y); 
    ?>
  
  will echo false;	
  	
  "Greater than or equal to" operator is represented by $x >= $y returns true if $x is greater than or equal to $y


    <?php
    $x = 100;  
    $y = 100;
    
    var_dump($x >= $y); 
    ?>
  
  will echo true;	
  
## 2.3 Other operators.

### Increment/Decrement operators

* ++$x	Pre-increment	Increments $x by one, then returns $x	
* $x++	Post-increment	Returns $x, then increments $x by one	
* --$x	Pre-decrement	Decrements $x by one, then returns $x	
* $x--	Post-decrement	Returns $x, then decrements $x by one

### String operators 

* .	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
* .=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1 

## 2.4 Order in operation.

The precedence of an operator specifies how "tightly" it binds two expressions together. For example, in the expression 1 + 5 * 3, the answer is 16 and not 18 because the multiplication ("*") operator has a higher precedence than the addition ("+") operator. Parentheses may be used to force precedence, if necessary. For instance: (1 + 5) * 3 evaluates to 18.

When operators have equal precedence, their associativity decides whether they are evaluated starting from the right, or starting from the left - see the examples below.

The following table lists the operators in order of precedence, with the highest-precedence ones at the top. Operators on the same line have equal precedence, in which case associativity decides the order of evaluation.

For more information on how precedence works in php, please read: 

http://docs.php.net/manual/da/language.operators.precedence.php


## 2.5 Testing operators.
  
## 2.6 Exercises.

## 2.7 Thoughts of an operator.