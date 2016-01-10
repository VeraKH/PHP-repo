<?php

class Beverage {
	public $name;

	function __construct(){
		echo "constructor has been called<br/>";
	}

	function __clone(){
		echo "clone has been called<br/>";
	}

}

$a = new Beverage;
echo $a->name="tea<br/>";
$b = $a;
echo $b->name="coffee<br/>";
echo $a->name."<br/>";

$c= clone $a;
echo $c->name."<br/>";
echo $c->name="juice<br/>";
echo $a->name."<br/>";



?>
