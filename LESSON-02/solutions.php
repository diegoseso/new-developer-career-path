<?php

//Numbers:
//Exercises: 

//1. Declare a variable with any name you’d like and assign an integer value to it. Use echo to print your variable to the terminal:

$age = 18;
echo $age;

//2. We’re going to make and print another number variable, but we don’t want it to print on the same line. Use echo to print the string "\n". Next, declare a variable with any name you’d like and assign a floating point value to it. Use echo to print this new variable to the terminal.

$age = 11;

echo $age;

echo "\n";

$movie_rating = 3.2;

echo $movie_rating;

*****

//Addition and Subtraction:
//Exercises:

//1. Use echo to print the number 12 to the terminal. The trick: use addition or subtraction to print a statement that evaluates to 12, and the number 12 can’t appear anywhere in your code!

echo 4 + 8;

*****

//Using Number Variables
//Exercises:

//1. I’m trying to figure out how much more I spent last month than this month. Last month I spent 1187.23 and this month I spent 1089.98. Create the variables $last_month and $this_month and assign them the corresponding numeric values.
 
$last_month = 1187.23;
$this_month = 1089.98;

//2. Use echo to print the difference between last month’s spending and this month’s.

echo $last_month - $this_month;

*****

//Multiplication and Division
//Exercises:

//1. Meg is trying to figure out how long, on average it takes her to learn a programming language. So far, she knows Ruby, Python, JavaScript, and C++. Create a variable, $num_languages, and assign to it the number of programming languages she has learned. Create a second variable, $months and assign 11 to it, which is the number of months she’s spent learning how to code.

$num_languages = 4;
$months = 11;

//2. Let’s get more precise. Meg realizes that she hasn’t quite studied every day. Create a variable $days and assign as its value the result of multiplying $months by the number of days per month she thinks she actually spent studying, which is 16 days each month.

$num_languages = 4;
$months = 11;
$days = $months * 16;

//3. Let’s figure out, on average, how many days it took her to learn each language. Assign the result of of this operation to a variable $days_per_language.

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;

//4. Print your $days_per_language variable to the terminal.

echo $days_per_language;

*****

//Exponentiation
PHP give us an operator for raising a number to the power of another number: the 
//Exercises:

//1. Use echo and the exponent operator to print the value of 8 squared to the terminal.

echo 8**2;

*****

//Modulo
//Exercises:

//1. We have 82 students going on a class trip. We want to divide the students into groups of 6. Use the modulo operator to echo how many students will be left without groups.

echo 82 % 6;

*****

//Order of Operations
//Exercises:

//1. Heya! Can you help me out. Use echo to print the answer to the terminal.

//I’m trying to figure out how much money I should have. At the start of the day I had $94.

//I spent $4.25 on coffee
//A friend gave me $7 that he owed me
//I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
//Some friends and I found $20 on the ground and split it four ways
//I think that’s everything.

//Use a single chained operation to get your result!

echo 94 - 4.25 + 7 - (23.50 +23.50*.2) + 20 / 4;

*****
//Mathematical Assignment Operators
//Exercises:

//1. We’re going to do a mathematical “magic” trick. Create a variable, $my_num and assign as its value any number.

//Next, create a second variable, $answer and assign $my_num as its value.

//2. Use the addition assignment operator to add 2 to $answer.

//3. Use the multiplication assignment operator to multiply $answer by 2.

//4. Use the subtraction assignment operator to subtract 2 from $answer.

//5. Use the division assignment operator to divide $answer by 2.

//6. Almost there. Use the subtraction assignment operator to subtract your original number ($my_num) from $answer. Finally, use echo to print $answer to the terminal.

//If everything went as it should, $answer should be 1. No matter what your original number was! Don’t belive us? Go ahead try it with a different number for the value of $my_num.

$my_num = 78;

$answer = $my_num;

$answer += 2;

$answer *= 2;

$answer -= 2;

$answer /= 2;

$answer -= $my_num;

echo $answer;

//Review Exercise: 

$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;
  
echo "We started with $riel Riel, $kyat Kyat, $krones Krones and $lek Lek.";

//Riel to USD: 0.00026
//Kyat to USD: 0.00066
//Krones to USD: 0.11
//Lek to USD: 0.0090

$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;

$final_riel = $riel * $riel_to_usd;
$final_kyat = $kyat * $kyat_to_usd;
$final_krones = $krones * $krones_to_usd;
$final_lek = $lek * $lek_to_usd;

echo "\nYour $riel Riel were exchanged for $final_riel USD.";

echo "\nYour $kyat Kyat were exchanged for $final_kyat USD.";

echo "\nYour $krones Krones were exchanged for $final_krones USD.";

echo "\nYour $lek Lek were exchanged for $final_lek USD.";

$final_amount = $final_riel + $final_kyat + $final_krones + $final_lek - 4;

echo "\nAfter taxes, you final amount is of $final_amount USD.";




