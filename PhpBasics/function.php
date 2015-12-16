<?php

// 1.4 Closure function
function math(Closure $type, $first, $second){

	return $type($first, $second);
}

$addiction = function($first, $second){
	return $first+$second;
};

$substraction = function($first, $second){
	return $first-$second;
};

echo math($addiction,4, 3)."\n";

function addSubt($value1, $value2){
	$add = $value1 + $value2;
	$subt = $value1 - $value2;
	return array($add, $subt); 
}

$resultArray = addSubt(10, 4);
echo "Add: " . $resultArray[0]."\n";
echo "Substr: " . $resultArray[1]."\n";

list($addResult, $sustrResult) = addSubt(20, 5);
echo "Add: " . $addResult."\n";
echo "Substr: " . $sustrResult."\n";

function paint($pet = "doggie", $color ="red") {
	return  "The color for your $pet is $color. \n";
	// var_dump(debug_backtrace());
}

paint();
echo paint("kitty");
echo paint("tiger", "yellow");


// print_r( get_defined_vars() );

?>
					