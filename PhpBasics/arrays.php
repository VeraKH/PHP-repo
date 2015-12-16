<?php

//ASSOSIATIVE array
$dogs = [
	"first" => "Mila",
	"second" => "Bob",
	"third" => "Brynn"
];

unset($dogs[second]); // Deleted "second" element from the array

var_dump($dogs); // Indexes as it was assigned

$b = array_values($dogs);  // Reassigning indexes
var_dump($b);

foreach ($dogs as $positon => $dog) {
	echo "I love you my {$positon} dog, {$dog}!\n";  
} 


// FOREACH in array
$greetings = function(array $names){
	echo "5. Calling greetings function. It returns: \n";
	foreach ($names as $name ) {
		echo "Hello, {$name}! ";
	}
};

$greetings(["Bob", "Jerry", "Mila"]);

//Overwriting of the arrays' element
$array = [
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
];
var_dump($array); //  [1]=> string(1) "d"

//Keys for not all elements in the array

$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array); // ......[6] => string(1) "c" [7] => string(1) "d"


// Array in the function

function getArray() {
    print_r(array(1, 2, 3));
}
getArray();


//
$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as &$color) {
    $color = strtoupper($color);
}
unset($color); /* это нужно для того, чтобы последующие записи в
$color не меняли последний элемент массива */

print_r($colors);

// By reference and by value

$arr1 = [2, 3];
$arr2 = $arr1;
$arr2[] = 4; // $arr2 изменился,
             // $arr1 все еще array(2, 3)
             
$arr3 = &$arr1;
$arr3[] = 4; // теперь $arr1 и $arr3 одинаковы

var_dump($arr2);


?>