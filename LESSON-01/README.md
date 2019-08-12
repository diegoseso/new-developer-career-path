# Introduction 

In this lesson we dig into the most basic concepts of programming.

# Lesson Index

*1. Variables
*  1.1 Declaring variables. 
*  1.2 Types.
*  1.3 Basic Structures.
*  1.4 Composed Structure.

#1. Variables

In programming, a variable is a value that can change, depending on conditions or on information passed to the program.
Typically, a program consists of instruction's that tell the computer what to do and data that the program uses when it is running. 
The data consists of constants or fixed values that never change and variable values (which are usually initialized to "0" or some default value because the actual values will be supplied by a program's user). Usually, both constants and variables are defined as certain data type s. Each data type prescribes and limits the form of the data. Examples of data types include: an integer expressed as a decimal number, 
or a string of text characters, usually limited in length.

##  1.1 Declaring variables. 

Variables in PHP starts with a dollar($) sign, followed by the name of the variable.
* The variable name must begin with a letter or the underscore character.
* A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
* A variable name should not contain space

Assigning a value to a variable in PHP is quite east: use the equality(=) symbol, which also to the PHP’s assignment operators.
This assign value on the right side of the equation to the variable on the left.
A variable is created the moment you assign a value to it:

    
    <?php
        $myCar = "Honda";
        echo $myCar;
    ?>
    
Variable names in PHP are case-sensitive. As a result, $person refers to a different variable than does $Person.
    
##  1.2 Types.

### Strings
A string is a sequence of characters, like "Hello world!".

A string can be any text inside quotes. You can use single or double quotes:

    <?php
    $x = "Hello world!";
    $y = 'Hello world!';
    echo $x;

### Integers

An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)

### Floats

A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example $x is a float. The PHP var_dump() function returns the data type and value:

    <?php 
    $x = 10.365;
    var_dump($x);
    ?>
    
### Boolean

A Boolean represents two possible states: TRUE or FALSE.

### Arrays 

An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

    <?php 
    $users = array("diego","norman","dilbert");
    var_dump($users);
    ?>

### NULL

PHP NULL Value
Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL: 

    <?php
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    ?>

### Resources
 
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
A common example of using the resource data type is a database call. 
 
##  1.3 Basic Structures.

Pending to define 

##  1.4 Composed Structure.

Pending to define 
