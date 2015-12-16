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


// By reference and by value

$arr1 = [2, 3];
$arr2 = $arr1;
$arr2[] = 4; // $arr2 изменился,
             // $arr1 все еще array(2, 3)
             
$arr3 = &$arr1;
$arr3[] = 4; // теперь $arr1 и $arr3 одинаковы

var_dump($arr2);


?>