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

// 2. Perform database query
	
	// Often these are for values in $_POST
	$menu_name = "Today's project";
	$position = 4;
	$visible = 1;

	//escape all strings
	$menu_name = mysqli_real_escape_string($db, $menu_name);

	// $query = "INSERT INTO subjects (menu_name, position, visible) 
	// 	    VALUES ('{$menu_name}', {$position}, {$visible})";

	 $query = "INSERT INTO subjects (";
	 $query .= "menu_name, position, visible";
	 $query .= ")  VALUES (";
	 $query .=  "  '{$menu_name}', {$position}, {$visible}";
	 $query .= ")";

	$result = mysqli_query($db, $query);

	 if ($result) {
	 	echo "Success!";
	 	//redirect_to("somePage.php")INS"
	 } else {
	 	//message = "Subjects edit failed"
	 	die ("Database query failed. " . mysqli_error($db));
	}

?>

<?php 
// 5. Close connection
mysqli_close($db);
?>
