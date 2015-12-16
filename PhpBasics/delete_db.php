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

	 $query = "DELETE FROM subjects  ";
	 $query .= "WHERE id = {$id} ";
	 $query .= "LIMIT 1";

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
