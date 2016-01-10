<!DOCTYPE html>
<html>
    <head>
        <title>References as Return values</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php

function RefReturn() { 
	global $a;
	$a = $a*2;
	return $a; //returns a value not a var!
}

$a = 10;
$b=RefReturn();
echo("{$a}/{$b}");

echo("<br/> ");

$b=30;
echo("{$a}/{$b}");

echo("<hr/> ");

//passing out reference
function &RefReturn2() { 
	global $c;
	$c = $c*2;
	return $c; 
}

$c = 10;
$d=&RefReturn2(); //setting to the reference
echo("{$c}/{$d}");

echo("<br/> ");

$d=30;
echo("{$c}/{$d}");


echo("<hr/> ");

//passing out reference
function &Increment() { 
	static $var=0;
	$var++;
	return $var; 
}

$a=&Increment();
Increment();
$a++;
Increment();
echo($a);

?>

</body>
</html>