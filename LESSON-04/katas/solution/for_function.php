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



function fooBarBothLoop($fooDivisor, $barDivisor){
	for ($i=0; $i<=100; $i++){
		if ($i%$fooDivisor==0 and $i%$barDivisor==0){
			echo "both" . PHP_EOL;
		} else {
			if ($i%$fooDivisor==0){
				echo "foo" . PHP_EOL;
			} else {
				if ($i%$barDivisor==0) {
					echo "bar" . PHP_EOL;
				} else {
					echo $i . PHP_EOL;
				}
			}
		}
	}
	
	
}
fooBarBothLoop(3, 5);
fooBarBothLoop(2, 7);
fooBarBothLoop(2, 9);





function fooBarBothLoopWithInterval($fooDivisor, $barDivisor, $initialLoopInterval, $finalLoopInterval){
	for ($i=$initialLoopInterval; $i<=$finalLoopInterval; $i++){
		if ($i%$fooDivisor==0 and $i%$barDivisor==0){
			echo "both" . PHP_EOL;
		} else {
			if ($i%$fooDivisor==0){
				echo "foo" . PHP_EOL;
			} else {
				if ($i%$barDivisor==0) {
					echo "bar" . PHP_EOL;
				} else {
					echo $i . PHP_EOL;
				}
			}
		}
	}
	
}

fooBarBothLoopWithInterval(2, 7, 1, 4);

?>
