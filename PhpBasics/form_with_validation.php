<?php require_once ("../includes/functions.php"); ?>
<?php require_once ("../includes/validation_functions.php"); ?>

<?php 

// require_once ("validation_functions.php");

	function RedirectTo($new_location){
	 header("Location: " .  $new_location);
	}

	
	$errors = array();
	$message = "";

	if (isset($_POST ["submit"])) {
		$username = trim($_POST["username"]);
		$password =  trim($_POST["password"]);

	//Validations
	$fields_required = array("username", "password");	
	foreach ($fields_required as $field) {
		$value = trim($_POST[$field]);
		if (!HasPresence($value)) {
			$errors[$field] = ucfirst($field) . " can't be blank";
		}
	}

		$fields_with_max_lengths = array("username" => 10, "password" => 3);
		ValidateMaxLengths($fields_with_max_lengths);

	// Login 	
	if (empty($errors)) {
     		if ($username == "Vera" && $password == "123") {
	    	RedirectTo("index.php");
	    } else {
		$message = "Username/password doesn't match";
	    }
	}
	} else {
		$username = "";
		$message = "Please log in.";
	}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Single Page</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php echo $message; ?><br />
<?php echo FormErrors($errors);?><br />

<br />
<form action="form_with_validation.php" method="post">
Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username);?>" /><br/>
Password: <input type="password" name="password" value="" /><br/>
<br/>
<input type="submit" name="submit" value="Submit" />

</form>

</body>
</html>