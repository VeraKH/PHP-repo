<?php

class Person {
	var $first_name;
	var $last_name;

	var $arm_count = 2;
	var $leg_count = 2;

	function SayHello() {
		echo "Hello from inside the class " . get_class($this) . "<br />";
	}
	function Hello() {
		$this->SayHello();
	}

	function FullName() {
		return $this->first_name . " " . $this->last_name;
	}
}


$person1  = new Person();
$person1->first_name = "Lucy ";
$person1->last_name = "Bridge";

echo($person1->SayHello());
echo($person1->Hello());

echo "<br/>";
echo($person1->arm_count . "<br/>");
echo($person1->arm_count=3);
echo "<br/>";
echo($person1->FullName());
echo "<br/>";

$vars = get_class_vars("Person");

foreach ($vars as $var => $value) {
	echo "{$var} : {$value}<br />";
}

echo property_exists("Person", "first_name") ? "true" : "false";


?>
