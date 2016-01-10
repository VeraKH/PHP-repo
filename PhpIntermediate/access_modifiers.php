<?php

class Example1 {
	public $a = 1;
	protected $b = 2;
	private $c = 3;

	function Dysplay() {
		echo $this->a;
		echo $this->b;
		echo $this->c;
	}
}

class Example2 extends Example1{
	$ex3  = new Example1();
}


$ex1  = new Example1();
echo $ex1->a;
echo "<br/>";


echo $ex3->b;


?>
