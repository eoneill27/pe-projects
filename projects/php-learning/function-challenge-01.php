<?php

/* 

THINGS TO KNOW

* You can define a default parameter value like this:
        function someFunction($number=NULL) { ...

* You can find the number of arguments passed to a function
 		with the built-in func_num_args() function 
		(returns the number of arguments)

* You can check if a variable (in this case an argument) as been set to a value
		with the built in  isset($variableName) function
		(returns true or false)

* You can check the 'type' of a value with the built-in 
		gettype($value) == "integer"
		(will return true or false)
		also note: != is for 'does not equal'

*/


// your code here (design the function so that all tests pass)

function double($i=NULL) {
	

	$typeCheck = gettype($i);
	$valueCheck = isset($i);
	$quantityCheck = func_num_args();

	if ($valueCheck != true) {
		return "You haven't supplied a value";
	} elseif ($typeCheck != 'integer') {
		return "You must input an integer";
	} elseif ($quantityCheck != 1) {
		return "You may only supply 1 value";
	} else {
		return $i * 2;
	}
}

double(4);


 // TEST DRIVEN DEVELOPMENT EXAMPLE 

function test($assertion, $description) {
	if ($assertion == true) {
 		echo "<li style='color: green'>PASS: $description</li>";
	} else {
		echo "<li style='color: red'>FAIL: $description</li>";
	}
}


echo "<ul class='test-list' style='font-size: 1rem'>";

test( double(4) == 8, "Double with possitive number");
test( double(0) === 0, "Double with zero is zero");
test( double(-4) == -8, "Double with negative number");
test( double("hi") == "You must input an integer", "If given a string, returns message");
test( double() == "You haven't supplied a value", "If no value supplied, returns message");
test( double(1, 2) == "You may only supply 1 value", "If more than one value supplied, returns message");

echo "</ul>";