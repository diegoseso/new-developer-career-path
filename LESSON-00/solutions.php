<?php

//Variables:
//Exercise: 

//1. Create a variable and assign to it a string value. You can give the variable any valid name you’d like and assign a string containing anything you want. End the statement with a semicolon.

$your_name = "Marcela"; 


//2. Declare a variable $biography and assign to it a string that starts with a new line character and contains a sentence or two about you.

$biography = "\nI was born in Brazil.";


//3.Create a variable $favorite_food and assign to it the string "\n", "mo", "que", and "ca" concatenated together.

$favorite_food = "\n" . "mo" . "que" . "ca";

//Using Variables:
//Exercise: 

//1. You’re going to create a couple variables. The variable, $name, should be assigned your name as a string. The second,$language, should be assigned a string value representing a language you’re learning. 

$name = "Marcela";  
$language= "PHP";

//2. Use echo to print any string you’d like with the $name variable concatenated to it.

echo "My first name is" . " " . $name . ".";

//3. Use echo to print a string starting with a newline (\n) with $language variable concatenated to it.

echo "\nI am learning" . " " . $language . ".";

*****

//Using Variables
//Exercise: 

//1. You’re going to create a couple variables. The variable, $name, should be assigned your name as a string. The second,$language, should be assigned a string value representing a language you’re learning. 

$name = "Marcela";  
$language= "PHP";

//2. Use echo to print any string you’d like with the $name variable concatenated to it.

echo "My first name is" . " " . $name . ".";

//3. Use echo to print a string starting with a newline (\n) with $language variable concatenated to it.

echo "\nI am learning" . " " . $language . ".";

*****

//Variable Parsing:
//Exercise: 

//1. We’re going to write a silly sentence PHP program. There are a number of variables assigned the string ‘___’. Replace each of them with words of the designated type:

// Fill in the blanks in the code below:
$noun = "___";
$adjective = "___";
//$verb = "___";

$noun = "decision";
$adjective = "decisive";
$verb = "decide";

//2. Beneath the three variables, there’s an echo statement with three blanks (___) in it. Replace those blanks with the three variables (in the order they were declared):

//echo "The world's most beloved ___ was very ___ and loved to ___ every single day.";

echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";


//3. Fix the line of code and uncomment it.

// echo "\nI have always been obsessed with $nouns. I'm $adjectiveish. I'm always $verbing.";

echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";

*****

//Variable Reassignment:
//Exercise: 

//1. We declared a variable $movie and assigned the string "___" to it. But that’s no fun! Beneath that declaration, reassign $movie so that it’s assigned a string containing your favorite movie from when you were a little kid.

//$movie = "___";
//echo "I'm a fickle person, my favorite movie used to be $movie.";

$movie = "Indiana Jones";
echo "I'm a fickle person, my favorite movie used to be $movie.";


//2. Below your reassignment of the $movie variable, declare and assign a new variable, $old_favorite. The $old_favorite variable should have $movie assigned to it.

$old_favorite = $movie;


//3. Reassign the value of $movie to a new string.

$movie = "Pulp Fiction";
echo "\nBut now my favorite is $movie.";

//4. Finally, at the end of the program add one last echo statement which uses PHP string parsing to print a string containing the $old_favorite variable.

echo "\nYesterday I saw $old_favorite again";

*****

//Concatenating Assignment Operator:
//Exercise: 

//1. We’re going on a picnic. We started you off with the $sentence variable holding the value "\nI'm going on a picnic, and I'm taking apples".

//Use the concatenating assignment operator (.=) to add another item to our list. The string you append should start with a comma(,) and a space followed by a word which starts with the letter “b”.

//Next use echo to print the new value of $sentence.
echo "I'm going on a picnic!";

$sentence = "\nI'm going on a picnic, and I'm taking apples";
echo $sentence;

$sentence .= ", bananas";
echo $sentence;

//2. This time use the concatenating assignment operator (.=) to append a string which starts with a comma(,) and a space followed by a word which starts with the letter “c”.

//Use echo to print the newest value of $sentence.

$sentence .= ", cakes.";

*****

//Assign by Reference:
//Exercise:

//1. You’ve inherited some code from another developer. You can’t change their code, but you need to add some additional functionality. Instead of using the $very_bad_unclear_name variable as is in your part of the code. Declare a new variable, $order, as a reference to the $very_bad_unclear_name variable.

$very_bad_unclear_name = "15 chicken wings";
echo "\nYour order is: $very_bad_unclear_name.";

$order =& $very_bad_unclear_name;

//2. Use the concatenation assignment operator to append more things to $order.

$order .= ", 1 cheeseburger";

$order .= ", 3 salads";

//Awesome! Notice how when we echo the $very_bad_unclear_name variable at the end of the programs, the changes you made are reflected in the output!


