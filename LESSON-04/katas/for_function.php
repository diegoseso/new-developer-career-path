<?php

/**
 * Based on the Excercise of the chapter 03 looping (LESSON-03/for.php), create:
 *
 * 1. A function called fooBarBothLoop() that can take up two arguments, $fooDivisor, $barDivisor.
 *    The function will contain the same logic from the sdolution of LESSON-03/for.php, but additionally:
 *    First argument $fooDivisor will be used as condition to print "foo" instead of hardcoded "3" from the exercise
 *    Second argument $barDivisor will be used as condition to print "bar" instead of hardcoded "5" from the exercise
 *
 * 2. Execute this function as fooBarBothLoop(2, 7); It should print: 0, 1, foo, 3, foo, 5, foo, bar, ..... 11, foo, 13, both ....
 * 3. Execute this function as fooBarBothLoop(2, 9); It should print: 0, 1, foo, 3, foo, 5, foo, bar, ..... 17, both, ....
 *
 * 4. Create a new function called fooBarBothLoopWithInterval() that can take up four arguments: $fooDivisor, $barDivisor, $initialLoopInterval, $finalLoopInterval.
 *    Such function will do the same as function 1 but $initialLoopInterval and $finalLoopInterval will control for interval, if those variables are not declared
 *    then $initialLoopInterval=1 and  $finalLoopInterval=100.
 *
 * 5. Execute above function as fooBarBothLoopWithInterval(2, 7, 1, 4); It should print
 *    1, foo, 3, foo
 */