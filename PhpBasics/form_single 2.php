<?php require_once ("../includes/functions.php"); ?>

<?php 
	if (isset($_POST ["submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
	    if ($username == "Vera" && $password == "123") {
	    	RedirectTo("index.php");
	    } else {
		$message = "There were some errors";
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

<?php echo($message);?><br />

<br />
<form action="form_single.php" method="post">
Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username);?>" /><br/>
Password: <input type="password" name="password" value="" /><br/>
<br/>
<input type="submit" name="submit" value="Submit" />

</form>

</body>
</html>