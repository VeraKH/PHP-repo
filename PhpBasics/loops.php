<?php

$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as &$color) {
    $color = strtoupper($color);
}
unset($color); /* это нужно для того, чтобы последующие записи в
$color не меняли последний элемент массива */

print_r($colors);

for ($i=0; $i <=3; $i++) {
	if ($i == "red"){
		continue;
	}
	echo $colors[$i] . ", ";
}


$greetings = function(array $names){
	echo "Calling greetings function: \n";
	foreach ($names as $name ) {
		echo "Hello, {$name}! ";
	}
};

$greetings(["Bob", "Jerry", "Mila"]);


$person = array(
		"first_name" => "Kevin", 
		"last_name" => "Skoglund",
		"address" => "123 Main Street",
		"city" => "Beverly Hills",
		"state" =>  "CA",
		"zip_code" => "90210"	
		);

foreach ($person as $attribute => $data) {
	$niceAttr = ucwords(str_replace("_", " ", $attribute));
	echo "$niceAttr: $data\n";
}

$prices = array(
		"Brand New Computer" => 2000, 
		"One month subscription" => 25,
		"Learn PHP" => null
		);

foreach ($prices as $attribute => $data) {
	echo "$attribute: ";
	if (is_int($data)){
		echo "$" . $data;
	} else {
		echo "pricesless";
	}
	echo "\n";
}

for ($i =0; $i <=5; $i++){
	if ($i % 2 == 0) { continue(1); }
	for ($k =0; $k <=5; $k++){
		if ($k ==3) { continue(2); }
		echo $i . " - " . $k . "\n";		
	}
}

echo "\n";

for ($i =0; $i <=4; $i++) {
	if ($i % 2 !=0) { continue; }
	for ($k =0; $k <=4; $k++){
		if ($k ==4) { break(2); }
	echo $i . " - " . $k . "\n";		
	}
}


$count =0; 
while ($count <=10 ){
	if ($count % 2 != 0) { 
		$count++;
		continue; }
	echo $count . ", ";
	$count++;
}
echo "\n ";

$ages = [4, 8, 15, " ", 42];

echo "1: " . current($ages)."\n";

next($ages);
echo "2: " . current($ages)."\n";

next($ages);
echo "3: " . current($ages)."\n";

next($ages);
next($ages);
echo "4: " . current($ages)."\n";

prev($ages);
echo "5: ". current($ages)."\n";

reset($ages);
echo "6: ". current($ages)."\n";

end($ages);
echo "7: " . current($ages)."\n";

next($ages);
echo "8: " . current($ages)."\n";

echo "\n ";

reset($ages);
while ($age = current($ages)) {
	echo $age . " , ";
	next($ages);
}

?>
					