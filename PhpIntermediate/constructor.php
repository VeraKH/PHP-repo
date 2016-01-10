<?php

class Table {
	public $legs;
	static public $total_tables = 0;

	public function __construct()
	{
		$this->legs=4;
		Table::$total_tables++;
		//parent::__construct();
	}
}

//echo $table->legs ."<br/>";

echo Table::$total_tables."<br/>";
$t1 = new Table();
echo Table::$total_tables."<br/>";
$t2 = new Table();
echo Table::$total_tables."<br/>";
$t3 = new Table(); 
echo Table::$total_tables."<br/>";



?>
