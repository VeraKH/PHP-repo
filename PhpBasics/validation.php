<!DOCTYPE html>
<html>
<head>
    <title>Validation</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">    
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
</head>
<body> 

<?php 
	$value = trim("    ");
// *presence
	if (!isset($value) || empty($value) && is_numeric($value)) {
		echo "Validation failed <br />";
	}

// *string length
	$value = "890";
	$min = 3;
	if (strlen($value) < $min) {
		echo "Validation failed <br />";

	}
	$max = 5;
	if (strlen($value) > $max) {
		echo "Validation failed <br />";

	}
// *type
           $value = "890";
	if (!is_string($value)) {
		echo "Validation failed <br />";

	}
// *inclusion in a set
           $value = 2;
           $set = array("1", "2", "4" );
	if (!in_array($value, $set)) {
		echo "Validation failed <br />";

	}
// *uniqueness (uses a db to check)


// *format
	if (preg_match("/PHP/", "They tell PHP is wierd.")) {
		echo("There is a match.<br/>");
	} else {
		echo("The match was not found. <br />");
	}

	$value = "hello@world.php";

	if (!preg_match("/@/", $value)) {
		echo("There is a match");
	} else {
		echo("The match was not found");
	}

	if (strpos($value, "@") === false) {
		echo "Validation failed";
	}



?>

</body>
</html>