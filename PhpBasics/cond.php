<?php

require "index.php";

$abs = function($x){
	if($x>0){
		return $x*$x;
	} 
	else {
		return -$x*3;
	}
};

$ab = function($a) use ($square){
if ($a>10){
	return $a+1;
} else{
	return $a-1;
}
};

$a = 9;

switch ($a) {
	case 0:
		echo "a equals 0";
		break;
	case 1:
		echo "a equals 1";
		break;
	case 2:
		echo "a equals 2";
		break;	
	case 3:
		echo "a equals 3";
		break;
	
	default:
		echo "a is not 0, 1, 2, 3";
		break;
}
echo "\n";

$year = 1988;
switch (($year-4) % 12) {
	case  0: $zodiac = "Rat"; break;
	case  1: $zodiac = "Ox"; break;
	case  2: $zodiac = "Tiger"; break;
	case  3: $zodiac = "Rabbit"; break;
	case  4: $zodiac = "Dragon"; break;
	case  5: $zodiac = "Snake"; break;
	case  6: $zodiac = "Horse"; break;
	case  7: $zodiac = "Goat"; break;
	case  8: $zodiac = "Monkey"; break;
	case  9: $zodiac = "Rooster"; break;
	case  10: $zodiac = "Dog"; break;
	case  11: $zodiac = "Pig"; break;

	default:
		echo "Please enter the year";
		break;
}
	echo "{$year} is the year of {$zodiac}";

echo "\n";

$userType = "customer";
switch ($userType)  {
	case  "student":  
		echo "Welcome";
		break;
	case "press":
	case "customer":
		echo "Hello";
		break;
}

echo "\n";

$count = 0;

while ($count <= 10){
	if ($count == 5){
		echo "FIVE, ";
	} else if ($count % 2 ){
	echo $count . ", ";
	}
	$count++ ;
	}
	


echo "\n";

for ($c =0; $c <=8; $c++){
	if ($c % 2 == 0){
		echo "{$c} is an even number.\n";
	} else {
		echo "{$c} id an odd c\n";
	}
}

?>
					