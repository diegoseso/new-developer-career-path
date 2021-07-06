<?php

Numbers
PHP has two number data types. The integer data type includes positive and negative whole numbers (such as 3, 4599, -98, and 0). The floating point data type is used to represent decimal numbers (such as 4.98273, 2.1, -9.7, -182736.8).

//Exercises: 

1. Declare a variable with any name you’d like and assign an integer value to it. Use echo to print your variable to the terminal:

2. We’re going to make and print another number variable, but we don’t want it to print on the same line. Use echo to print the string "\n". Next, declare a variable with any name you’d like and assign a floating point value to it. Use echo to print this new variable to the terminal.

*****

//Addition and Subtraction
//HP provides several operators we can use on numbers. Let’s start with two that are likely familiar: the addition (+) and subtraction (-) operators:

echo 5 + 1; // Prints: 6
echo 6.6 + 1.2; // Prints: 7.8
echo 198263 - 263;  // Prints: 198000
echo -22.8 - 19.1; // Prints: -41.9

//Exercises:
1. Use echo to print the number 12 to the terminal. The trick: use addition or subtraction to print a statement that evaluates to 12, and the number 12 can’t appear anywhere in your code!

*****

Using Number Variables

We can use number operators on variables that hold number values:

$tadpole_age = 7;
$lily_age = 6; 
$age_difference = $tadpole_age - $lily_age;
echo $age_difference; // Prints 1
Let’s look at another example of performing operations with number variables:

$favorite_num = 22;
echo $favorite_num + 1; // Prints 23
echo $favorite_num; //Prints 22
In the code above, we created the variable $favorite_num then we used echo to print that value plus 1. Note that we didn’t reassign the value of the $favorite_num variable, so it still had the value 22 when we printed it on the last line.

We reassign number variables using the assignment operator:

$age = 82;
echo $age; // Prints: 82

$age = $age + 2;
echo $age; // Prints: 84

//Exercises:

1. I’m trying to figure out how much more I spent last month than this month. Last month I spent 1187.23 and this month I spent 1089.98. Create the variables $last_month and $this_month and assign them the corresponding numeric values.

2. Use echo to print the difference between last month’s spending and this month’s.

*****

Multiplication and Division

PHP also gives us operators for performing multiplication (*) and division (/).

echo 2 * 3; // Prints: 6
echo -21 / 7; // Prints: -3
Like with addition and subtraction, when we perform multiplication or division, the computer will return an integer whenever the operation evaluates to a whole number.

The reverse is also true:

$num_cookies = 24;
$num_friends = 7;
$cookies_per_friend = $num_cookies / $num_friends;
echo $cookies_per_friend; // Prints: 3.4285714285714
In the code above, we performed an operation on two integers that didn’t divide into each other evenly, so the computer returned a floating point number.

//Exercises:
1. Meg is trying to figure out how long, on average it takes her to learn a programming language. So far, she knows Ruby, Python, JavaScript, and C++. Create a variable, $num_languages, and assign to it the number of programming languages she has learned. Create a second variable, $months and assign 11 to it, which is the number of months she’s spent learning how to code.

2. Let’s get more precise. Meg realizes that she hasn’t quite studied every day. Create a variable $days and assign as its value the result of multiplying $months by the number of days per month she thinks she actually spent studying, which is 16 days each month.

3. Let’s figure out, on average, how many days it took her to learn each language. Assign the result of of this operation to a variable $days_per_language.

4. Print your $days_per_language variable to the terminal.

*****

//Exponentiation
PHP give us an operator for raising a number to the power of another number: the exponentiation operator (**).

For example, we can square a number by raising it to the power of 2:

echo 4 ** 2; // Prints: 16
We can also use this operator on floats and negative numbers:

echo 2.89 ** 3.2;  // Prints: 29.845104015297
echo 10 ** -1; // Prints: 0.1
For PHP to interpret this operator correctly it can’t have any spaces between the two * characters:

echo 2 * * 3; // Will result in an error

//Exercises:

1. Use echo and the exponent operator to print the value of 8 squared to the terminal.

*****

Modulo

PHP also provides an operator that might be less familiar: modulo (%). The modulo operator returns the remainder after the left operand is divided by the right operand.

echo 7 % 3; // Prints: 1
In the code above, 7 % 3 returns 1. Why? We’re trying to fit 3 into 7 as many times as we can. 3 fits into 7 at most twice. What’s left over—the remainder—is 1, since 7 minus 6 is 1.

//Exercises:

1. We have 82 students going on a class trip. We want to divide the students into groups of 6. Use the modulo operator to echo how many students will be left without groups.

*****

//Order of Operations
We can chain multiple operations together to get a single result:

echo 2 + 3 + 4 + 5 - 1.1; // Prints: 12.9
echo 2 * 9 / 6; // Prints: 3
You might have learned about operations having an order of precedence in a math class. This means that operations in a chain aren’t simply performed from left to right; rather each operator is given a special rank.

Operations will be evaluated in the following order:

Any operation wrapped in parentheses (())
Exponents (**)
Multiplication (*) and division (/)
Addition (+) and subtraction (-).

//Exercises:

1. Heya! Can you help me out. Use echo to print the answer to the terminal.

I’m trying to figure out how much money I should have. At the start of the day I had $94.

I spent $4.25 on coffee
A friend gave me $7 that he owed me
I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
Some friends and I found $20 on the ground and split it four ways
I think that’s everything.

Use a single chained operation to get your result!

*****

Mathematical Assignment Operators

One common task when manipulating number variables is to reassign them to their old value with some operation performed on it.

$savings = 800;
$bike_cost = 75;
$savings = $savings - $bike_cost;
echo $savings; // Prints: 725
This is such a common task that PHP provides a shorter syntax using arithmetic assignment operators:

Operation:	Long Syntax:	Short Syntax:
Add	        $x = $x + $y	$x += $y
Subtract	$x = $x - $y	$x -= $y
Multiply	$x = $x * $y	$x *= $y
Divide	    $x = $x / $y	$x /= $y
Mod	        $x = $x % $y	$x %= $y

We could use this shorter syntax to rewrite the above code:

$savings = 800;
$bike_cost = 75;
$savings -= $bike_cost;
echo $savings; // Prints: 725

Increment operators allow us to subtract or add one to a number with just two characters.

$age = 89; 
$age++;
echo $age; // Prints: 90

$days_til_vacation = 7; 
$days_til_vacation--;
echo $days_til_vacation; // Prints: 6
In the code above, we used the post-increment (++) operator to add one to $age and we used the post-decrement operator (--) to subtract one from $days_til_vacation.

Those keystrokes can add up, so let’s practice using arithmetic assignment operators on variables!

//Exercises:

1. We’re going to do a mathematical “magic” trick. Create a variable, $my_num and assign as its value any number.

Next, create a second variable, $answer and assign $my_num as its value.

2. Use the addition assignment operator to add 2 to $answer.

3.
Use the multiplication assignment operator to multiply $answer by 2.

4.
Use the subtraction assignment operator to subtract 2 from $answer.

5.
Use the division assignment operator to divide $answer by 2.

6.
Almost there. Use the subtraction assignment operator to subtract your original number ($my_num) from $answer. Finally, use echo to print $answer to the terminal.

If everything went as it should, $answer should be 1. No matter what your original number was! Don’t belive us? Go ahead try it with a different number for the value of $my_num.


//Review Exercise: 

World Traveler
Hello there, friend! We’re exhausted having just returned to New York City from a whirlwind of world travel. We’re bringing all our international currency to the bank to be exchanged for USD. Our travels have made us wise and weary, and we want to ensure we’re being treated fairly. Can you help?

Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged.

Tasks


Calculate Our Expected Amount of USD
1.
Create variables to hold the amount of each foreign currency we’ll be exchanging:

We had a blissful time at Lake Yeak Laom in Ratanakiri, Cambodia and ended up with 2103942 riel left in our pocket
We saw the best sunset of our lives in Hpa-an, Myanmar and left the country with 19092 kyat
We got our fill of fjords in Bergen, Norway and discovered 109 krones that went unspent
We soaked up the sun and history in Saranda, Albania and found 9094 lek scattered throughout our luggage when we arrived home to NYC
It makes sense to name the variables meaningfully. For example, we would create a variable $riel to hold the value 2103942.

2.
Use echo to print how much of each currency we started out with.

3.
Look up the exchange rate for each of those currencies. Save a variable for each exchange rate.

4.
For each currency, calculate the amount of USD it will be exchanged for and use echo to print this to the terminal.

5.
The currency exchange business takes a flat $1 fee per conversion. Calculate our final amount of USD and use echo to print it to the terminal.