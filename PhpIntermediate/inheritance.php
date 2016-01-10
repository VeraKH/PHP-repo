<?php

class Car {
	var $wheels = 4;
	var $door = 4;

	function DysplayValues() {
		return $this->wheels . " and " . $this->door . "<br/>";
	}
}

class CompactCar extends Car {
	var $wheels = 2;
	var $door = 2;

	function DysplayValues() {
		return "Overriding values and function: " . $this->wheels . " and " . $this->door . "<br/>" ;
	}
}


$car1  = new Car();
$car2  = new CompactCar();
echo "Car1 : " . $car1->DysplayValues();
echo "Car2 : " .  $car2->DysplayValues();
echo "<br/>";

echo "Car parent: "  . get_parent_class("Car") .  "<br/>" ;
echo "Compact Car parent: "  . get_parent_class("CompactCar") .  "<br/>" ;;
echo is_subclass_of("CompactCar", "Car") ? "true" : "false";


?>
