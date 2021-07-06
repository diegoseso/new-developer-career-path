<?php

Variables

Declaring a variable is the process of reserving a word, the variable name, which we’ll be able to refer to in our code. It’s good practice to name the variable in a way that describes the data it holds.

Assignment is the process of associating that variable name with a specific value so that everytime we use the variable’s name the computer will grab that value.

To declare a variable we use the dollar sign character ($) followed by our chosen variable name. The dollar sign is known as a sigil; it’s a character that allows the computer to see quickly that something is a variable.

One common convention when naming PHP variables is to use an underscore between words on variable names with more than one word in their name. This is known as snake case.

//Exercise: 
1. Create a variable and assign to it a string value. You can give the variable any valid name you’d like and assign a string containing anything you want. End the statement with a semicolon.


2. Declare a variable $biography and assign to it a string that starts with a new line character and contains a sentence or two about you.

3.Create a variable $favorite_food and assign to it the string "\n", "mo", "que", and "ca" concatenated together.

*****

Using Variables

//Exercise: 
1. You’re going to create a couple variables. The variable, $name, should be assigned your name as a string. The second,$language, should be assigned a string value representing a language you’re learning. 

2. Use echo to print any string you’d like with the $name variable concatenated to it.

3. Use echo to print a string starting with a newline (\n) with $language variable concatenated to it.

*****

Variable Parsing

PHP strings allow us to place variables directly into double quoted strings. These variables will be parsed which means the computer will read the variables as the value they hold rather than see them as just a sequence of characters. PHP string parsing is incredibly useful. Whenever PHP sees a dollar sign ($) inside a string it will assume all the characters next to it (until it reaches a character that couldn’t be included in a variable name) are a part of the variable name.

Sometimes this can get complicated. Consider the following example:

$toy = "frisbee";
echo "Alex likes playing with $toys";

The code above will cause an error. Why? The computer was looking for a variable $toys and couldn’t find one. PHP allows us to specifically indicate the variable name by wrapping it in curly braces to avoid any confusion. We’ll include the dollar sign followed by the variable name wrapped in curly braces.

//Exercise: 
1. We’re going to write a silly sentence PHP program. There are a number of variables assigned the string ‘___’. Replace each of them with words of the designated type:

Fill in the blanks in the code below:
$noun = "___";
$adjective = "___";
$verb = "___";

2. Beneath the three variables, there’s an echo statement with three blanks (___) in it. Replace those blanks with the three variables (in the order they were declared):

echo "The world's most beloved ___ was very ___ and loved to ___ every single day.";

3. Fix the line of code and uncomment it.

//echo "\nI have always been obsessed with $nouns. I'm $adjectiveish. I'm always $verbing.";

*****

Variable Reassignment

The process of assigning a new value to a variable is called reassignment. We reassign a variable using the assignment operator on a variable that’s already been declared:

It’s often useful to create new variables assigned to the same value as an existing variable:

$first_player_rank = "Beginner";
$second_player_rank = $first_player_rank; 

This created a new variable ($second_player_rank) assigned the value "Beginner". Notice how variables can be treated different depending on where they appear in code. During variable assignment or reassignment, the variable on the left of the assignment operator is treated as a variable (named storage for holding a value) while a variable on the right of the operator is treated as the value it stores. 

//Exercise: 

1. We declared a variable $movie and assigned the string "___" to it. But that’s no fun! Beneath that declaration, reassign $movie so that it’s assigned a string containing your favorite movie from when you were a little kid.

$movie = "___";
echo "I'm a fickle person, my favorite movie used to be $movie.";

2. Below your reassignment of the $movie variable, declare and assign a new variable, $old_favorite. The $old_favorite variable should have $movie assigned to it.

3. Reassign the value of $movie to a new string.

4. Finally, at the end of the program add one last echo statement which uses PHP string parsing to print a string containing the $old_favorite variable.

*****

Concatenating Assignment Operator

We can assign and reassign variables to the values that result from operations:

$full_name = "Marcela" . " Charchar";
echo $full_name; // Prints: Marcela Charchar

During assignment, the computer will first evaluate everything to the right of the assignment operator and return a single value.

One theme you may notice as you learn a programming language’s syntax is that common actions that programmers need to do a lot often have a shortcut. Consider the following:

$full_name = "Marcela";
$full_name = $full_name . " Charchar";
echo $full_name; // Prints: Marcela Charchar

In the code above, we have the variable $full_name assigned the value "Marcela". We want to reassign $full_name to its current value appended with the string " Charchar".

Believe it or not, this is such a common task that PHP offers a shorthand notation, the concatenating assignment operator (.=). Let’s compare the same action but using this alternate operator:

$full_name = "Marcela";
$full_name .= " Charchar";
echo $full_name; // Prints: Marcela Charchar

//Exercise: 

1. We’re going on a picnic. We started you off with the $sentence variable holding the value "\nI'm going on a picnic, and I'm taking apples".

Use the concatenating assignment operator (.=) to add another item to our list. The string you append should start with a comma(,) and a space followed by a word which starts with the letter “b”.

Next use echo to print the new value of $sentence.
echo "I'm going on a picnic!";

$sentence = "\nI'm going on a picnic, and I'm taking apples";
echo $sentence;

2. This time use the concatenating assignment operator (.=) to append a string which starts with a comma(,) and a space followed by a word which starts with the letter “c”.

Use echo to print the newest value of $sentence.

*****

Assign by Reference
When we create a variable assigned to another variable, the computer finds a new space in memory which it associates with the left operand, and it stores a copy of the right operand’s value there.

//This new variable holds a copy of the value held by the original variable, but it’s an independent entity; changes made to either variable won’t affect the other:

$first_player_rank = "Beginner"; 
$second_player_rank = $first_player_rank; 
echo $second_player_rank; // Prints: Beginner

$first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
echo $second_player_rank; // Still Prints: Beginner

We can also create an alias, or nickname, for a variable. Instead of a copy of the original variable’s value, we create a new name which points to the same spot in memory.

We use a different operator for this—the reference assignment operator (=&).

When we assign by reference we’re saying that the variable on the left of the operator should point, or refer, to the exact same data as the variable on the right. With assignment by reference, changes made to one variable will affect the other:

$first_player_rank = "Beginner";
$second_player_rank =& $first_player_rank; 
echo $second_player_rank; // Prints: Beginner

$first_player_rank = "Intermediate"; // Reassign the value of $first_player_rank
echo $second_player_rank; // Prints: Intermediate

//Exercises:

1. You’ve inherited some code from another developer. You can’t change their code, but you need to add some additional functionality. Instead of using the $very_bad_unclear_name variable as is in your part of the code. Declare a new variable, $order, as a reference to the $very_bad_unclear_name variable.

$very_bad_unclear_name = "15 chicken wings";
echo "\nYour order is: $very_bad_unclear_name.";

2. Use the concatenation assignment operator to append more things to $order.

Awesome! Notice how when we echo the $very_bad_unclear_name variable at the end of the programs, the changes you made are reflected in the output!


