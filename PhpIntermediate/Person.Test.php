<?php

class Person {
	

	function SayHello() {
		echo "Hello from inside the class " . get_class($this) . "<br />";
	}
	function Hello() {
		$this->SayHello();
	}
}


$person1  = new Person();
echo($person1->SayHello());
echo($person1->Hello());

?>
