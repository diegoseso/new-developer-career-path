<?php
// homework 
// build an iterator that executes from 0 to 100 printing iteration number 
// but if iteration number is multiple of 3 print "foo" instead 
// if iteration number is multiple of 5 print "bar" instead
// if iteration number is multiple of 5 and 3 at the same time, print "both";
// example output: 1, 2, foo, 4 , bar, .... 13, 14, both, .... 
// hint: in math and in programming there is a concept called module, module refers to the remaining of a value
// example: in php 15%5 equals 0 because 15 / 5 has no remaining , 5*3 = 15 
// other example  17%5 equals 2 because 17 / 5 has 2 as remaining, 5*3 + 2 = 17 
// if (17%5) evaluates to true and  if (15%5) is false.... 


for($i=0;$i<=100; $i++){
	
if ($i%3==0 and $i%5==0){
	echo "both". PHP_EOL;
}	else {
if ($i%3==0){
	echo "foo" . PHP_EOL;
} else {
	if ($i%5==0){
	echo "bar". PHP_EOL;
} else {
	echo $i . PHP_EOL;
}
}
}
}
?>
