<?php

/**
 * Now that you are in control of how function works, let´s create functions to make a game
 *
 * 1. A function that can take an array as parameter, the function will only check if the parameter received is a 3X3 integer values array
 *    if the parameter received complies then the function will return true, otherwise the function wll return false.
 *    For example if the parameter is array(array(3,2,1),array(6,5,4), array(9,8,7)) it will return true.
 *                if the parameter is array(array(3,2,1),array(6,"foo",4), array(9,8,7)) it will return false.
 *    Name it as you like, from now on I will only suggest name, for example validateSubGrid
 *
 * 2. A function that can take an array of array (3X3) as parameter, (use only parameterer that will pass validateSubGrid function first)
 *    and validate that all it´s values are between 1-9 and they not repeat.
 *    For example array(array(3,2,1),array(6,5,4), array(9,8,7)) will return true
 *                array(array(3,2,1),array(6,6,4), array(9,8,7)) will return false
 *    Suggestions: you can have another array to compare, for example $baseOptions = array(1,2,3,4,5,6,7,8,9), there are  built in functions in all languages
 *    that you can use in order to compare, operate and transform data, for example in_array($value, $baseOption) will check if certain value will
 *    exists inside $baseOption array.
 *
 *    All laguages have extensive documentation about their built int functions, for exmaple, in the case of php, you have (php.net)[www.php.net]
 *    If you want to know examples or hoew certain function works, you just go to the doc page and you will have it documented, in_array() built in function
 *    for example has it´s documentation in https://www.php.net/manual/en/function.in-array.php
 *
 *    Hint: iterate over received array and see if it´s value exists in $baseOption, every time a value is found eliminate it from $baseOptions,
 *    at the end of the iteration the number of elements in $baseOptions should be zero. Other way is to look fo array_diff(), you might also like to take
 *    a look at count() and array_merge(), unset() ....
 */