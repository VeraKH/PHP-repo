<!DOCTYPE html>
<html>
<head>
    <title>Form processing</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">    
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
</head>
<body> 

<?php 
	print_r($_POST);
?>

<?php 
	// Set default values

	if (isset($_POST["submit"])) {
		echo "form was submitted";
	
	if (isset($_POST["username"])) {
		$username = $_POST["username"];
	} else {
		$username = "";
	}
	if (isset($_POST["password"])) {
		$password = $_POST["password"];
	} else {
		$password = "";
	} 

	$username = isset($_POST["username"]) ? $_POST["username"] : " ";
	$password = isset($_POST["password"]) ? $_POST["password"] : " ";
	
	} else {
		$username = "Nobody";
		$password = "nothing";
	}	
?>

<?php
	echo "{$username}:  {$password}";
?>

</body>
</html>