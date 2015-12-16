<?php

$arr0= [3,1];

$arr1 = [4 , 3, 4, 5, 3, 8];
$arr2 = [6 , 4, 2, 5, 6, 6, 8, 9, 10];


// /* Array size*/

function CountAr ($arr){
for ($i=0; $i <=100000;  $i++){
	if($arr[$i]== null){
		break;
	} else {
		$arr[$i] = $i;
	}
}
	return($i);

}
var_dump(CountAr($arr2));


/* Array sorting: two elements */

function SortTwo ($arr){

	if ($arr[1] < $arr[0]) {
		$temp = $arr[0];
		$arr[0] = $arr[1];
		$arr[1] = $temp;
	}
	return $arr;
}

print_r(SortTwo($arr0));


/* Array sorting: any number of the elements */

function SortAny($arr){

$size = count($arr)-1;

$temp;

for ($i = 1; $i <= $size; $i++) {
	$temp=$arr[$i];
    for ($j = $i -1; $j >= 0 && $arr[$j] > $temp; $j--){
    		$arr[$j+1]  = $arr[$j];
        }
        $arr[$j+1] = $temp;
}
	return $arr;
}

/* Arrays: common elements for the both arrays */

function FindCommonElements($arr1, $arr2) {

$arr1 =SortAny($arr1);
$arr2 = SortAny($arr2);

$arr1size = count($arr1)-1;
$arr2size = count($arr2)-1;

for ($i=0; $i<=$arr1size; $i++){
	for ($j=0; $j <= $arr2size && $arr1[$i] !== $arr1[$i+1]; $j++){
		if ($arr1[$i]==$arr2[$j] && $arr2[$j] !== $arr2[$j+1]){
			var_dump($arr2[$j]);
		}
	}
}
}
 echo FindCommonElements($arr1, $arr2);

/* Arrays: missing elements in another array */

function FindUniqueElements($arr1, $arr2) {

$arr1 =SortAny($arr1);
$arr2 = SortAny($arr2);

$arr1withoutArr2 = [];

	for ($i=0; $i<=CountAr($arr1) && $arr1[$i] == $arr1[$i+1]; $i++){
		$found = false;
		for ($j=0; $j <= CountAr($arr2) && $arr2[$j] == $arr2[$j+1];  $j++){
			if ($arr1[$i] === $arr2[$j]){
				$found = true;
				break;
			}
		}
	if (!$found){
		$arr1withoutArr2[] = $arr1[$i];
			}	
	}
		print_r($arr1withoutArr2);
}	

 echo FindUniqueElements($arr1, $arr2);


/* Arrays join*/

function JoinArray ($arr1, $arr2) {
           for ($k = 0;  $k <= count($arr2)-1; $k++ ){
            $arr1[count($arr1)] = $arr2[$k];
	}
	  return SortAny($arr1);
}

print_r(JoinArray($arr1, $arr2)); 

/* Array reverse */

function ReverseArr ($arr) {

$arr2size = count($arr)-1;

for ($i=0; $i <=$arr2size/2; $i++){
	$tempBgn = $arr[$i];
	$tempEnd = $arr2size-$i;
	$arr[$i] = $arr[$tempEnd];     
	$arr[$tempEnd] = $tempBgn;
}
	return $arr;
}

print_r(ReverseArr(JoinArray($arr1, $arr2)));

// Outputs correct ending for the nout программист with number of them from 0 ~ *
function OutputsCorrectEndingFortheNoun($inputNumber){

if ($inputNumber === 1){
	echo "$inputNumber программист";
} else if ($inputNumber >= 2 && $inputNumber < 5){
	echo "$inputNumber программиста";
} else if ($inputNumber === 0 || $inputNumber >= 5 && $inputNumber <=11){
	echo "$inputNumber программистов";
} else if ($inputNumber >= 10 && $inputNumber <=100 ){
		echo From10To100($inputNumber);
} else if ($inputNumber >= 100){
		From100 ($inputNumber);	
} else {
	echo "Вы ввели некорректное число";
	}
}

function ChecksTheRangeFrom100 ($inputNumber){
	$res100 = $inputNumber % 100;

	if ($res100 >=11 && $res100 <=19 ){
	echo "$inputNumber программистов";
	} else {
		From10To100($inputNumber);
	}
}

function ChecksTheRangeFrom10To100($inputNumber){
	$res = $inputNumber % 10;
	
	if ($res ===1){
		echo "$inputNumber программист";
	 }else if ($res >= 2 && $res < 5){
		echo "$inputNumber программиста";
	} else if ($res === 0 || $res >= 5 && $res < 10){
		echo "$inputNumber программистов";
	}
}

OutputsCorrectEndingFortheNoun(345364757);


/* А bit of functional programming */

// Returns a pow 
function myPow ($base, $exp){
	if ($exp==1) {return $base;}
	return $base * myPow($base, $exp-1);
}

/* Exercise 1.2 Определите процедуру, которая принимает в качестве аргументов три числа и возвращает сумму
квадратов двух больших из них.  */


$square = function($num){
	return $num * $num;
};

// Returns sum of squares for two values
$maxSumOfSquare = function($num1, $num2) use ($square){

	return $square($num1)+$square($num2);
};

// Returns sum of square for two max values among three
$maxOfThree = function($num1, $num2, $num3) use($maxSumOfSquare) {
	if ($num1<$num2 && $num1<$num3){
		return $maxSumOfSquare($num2, $num3);
	} else if ($num2<$num1 && $num2<$num3){
		return $maxSumOfSquare($num1, $num3);
	} else if ($num3<$num1 && $num3<$num2){
		return $maxSumOfSquare($num1, $num2);
	} else {
		return "Something is wrong";
	}
};

echo $maxOfThree(1, 2, 3)."<br>"; 


/*1.4 Newton method of finding square root */

function square ($num){
	return $num * $num;
}

function absolute ($x){
	if($x>0){
		return $x;
	} 
		return -$x;
}

function average ($num1, $num2) {
	return ($num1+$num2)/2;
}

 function improve ($guess, $x) {
 	return average($guess, $x / $guess);
 }

 function enough ($guess, $x) {
	if ( absolute(square($guess) - $x)< 0.0001){
		return true;
	}
		return false;
	
}

function sqrtIter ($guess, $x) {
	if (enough($guess, $x)){
		return $guess;
	}
		return sqrtIter(improve($guess, $x), $x);
}

function my_sqrt ($x) {
	return sqrtIter (1.0, $x);
}

// Call 1.3
echo my_sqrt (9);

?>