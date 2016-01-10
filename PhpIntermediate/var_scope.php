<!DOCTYPE html>
<html>
    <head>
        <title>Variable scope</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php

$var = 1;

function test1(){
	$var =2;
	echo $var . "<br/>";
}
     test1();
     echo $var . "<br/>";
     echo "<hr/>";

     function test2(){
     	global $var;
	$var =2;
	echo $var . "<br/>";
}

     test2();
     echo $var . "<br/>";
     echo "<hr/>";

       echo "<hr/>";

       $var =1;
     function test3(){
	static $var =2;
	echo $var . "<br/>";
	$var++;
}

     test3();
     test3();
     test3();
     echo $var . "<br/>";
     echo "<hr/>";
?>

</body>
</html>