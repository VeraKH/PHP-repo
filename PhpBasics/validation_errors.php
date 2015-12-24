<!DOCTYPE html>
<html>
<head>
    <title>Validation Errors</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">    
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
</head>
<body> 

<?php 
	require_once("validation_functions.php");

	$errors = array();
	$username = trim("");

	if (!HasPresence($username)) {
		$errors["username"] = "Username can't be blank.";
	}

	echo FormErrors($errors);


	
?>

</body>
</html>