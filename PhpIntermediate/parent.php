<?php

class Test {
	static $a = 1;

	static function Modify()
	{
		return self::$a+10;
	}

	public function Hello(){
		echo "Hello World<br/>";
	}

}

class Test2 extends Test {

	static function DisplayParentA(){
		// echo Test::$a;
		echo parent::$a;
	}

	static function DisplayParentFun(){
		echo parent::Modify();
	}

	public function InstanceTest(){
		
		// echo $this->Hello();
		echo parent::Hello();
	}

	public function Hello(){
		echo "*********<br/>";
		parent::Hello();
		echo "*********<br/>";
	}

}

echo Test::Modify();
echo "<br/>";
echo Test2::$a . "<br/>";
echo Test2::Modify() . "<br/>";
echo Test2::DisplayParentA() . "<br/>";
echo Test2::DisplayParentFun() . "<br/>";

$object = new Test2();
$object->InstanceTest();
$object->Hello();

$object2 = new Test();
$object2->Hello();

?>
