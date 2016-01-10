<?php

class GetterSetter {
	private $a = 1;

	public function get_a() {
		echo $this->a;
	}
	public function set_a() {
		echo $this->a=5;
	}
}


$example = new GetterSetter();
echo $example->get_a();
echo "<br/>";
echo $example->set_a();


?>
