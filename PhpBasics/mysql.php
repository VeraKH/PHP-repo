<?php
// Step 1 Create connection
	$dbhost = "localhost"; //  ip, domain...
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

	$query = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";

	$result = mysqli_query($db, $query);

	 if (!$result) {
	 	die ("Database query failed");
	}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Databases </title>
        <meta charset="UTF-8">
    </head>
<body>


  <?php

// 3. Use returned data and inserting data into html list (if any)

	// while($row = mysqli_fetch_row($result)) {
	// 	var_dump($row);
	// 	echo "<hr />";
	// }

		while($subject = mysqli_fetch_assoc($result)) {
  ?>
		<li><?php echo $subject["menu_name"] . "  (" . $subject["id"]. ")"; ?> </li>
<?php
		// <!-- echo $row["menu_name"] . "<br />";
		// echo $row["position"] . "<br />";
		// echo $row["visible"] . "<br />"; -->

		// var_dump($row);
		// echo "<hr />";
	}

		// while($row = mysqli_fetch_array($result)) {
		// var_dump($row);
		// echo "<hr />";
	// }


	//To know what id was inserted last

	// $id = mysqli_insert_id($db);
	// echo $id;



?>

<?php
// 4. Release returned data
mysqli_free_result($result);
?>

</body>
</html>

<?php 
// 5. Close connection
mysqli_close($db);
?>
