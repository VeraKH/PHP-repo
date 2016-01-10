<?php

class Person {
	function SayHello() {
		echo "Hello from inside a class.<br />";
	}

}

$person = new Person();
$person2 = new Person();

echo($person2->SayHello());


// if(class_exists("Person")){
// 	echo "The class has been defined";
// } else {
// 	echo "Failed";
// }

// $classes = get_declared_classes();
// foreach ($classes as $class) {
// 	echo $class . "<br/>";
// }


?>
