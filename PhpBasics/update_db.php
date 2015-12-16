<?php

// 1. Open connection

	$dbhost = "localhost"; 
	$dbuser = "monster_cms";
	$dbpass = "beast";
	$dbname = "monsters_corp";

	$db = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	 if (mysqli_connect_errno()) {
	 	die ("Database connection failed: "  . 
	 		mysqli_connect_error() . 
	 		" (" . mysqli_connect_errno() . ") "
	   	);
	}
?>

<?php


// 1. Perform query

	$id = 12;
	$menu_name = "Delete me";
	$position = 5;
	$visible = 1;

	 $query = "UPDATE subjects SET ";
	 $query .= "menu_name = '{$menu_name}', ";
	 $query .= "position = {$position}, ";
	 $query .= "visible = {$visible} ";
	 $query .= "WHERE id = {$id}";


	$result = mysqli_query($db, $query);

	 if (mysqli_affected_rows($db) == 1) {
	 	echo "Success!";
	 } else {
	 	die ("Database query failed. " . mysqli_error($db));
	}

?>

<?php 
// 5. Close connection
mysqli_close($db);
?>
