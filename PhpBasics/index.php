<?php
// header("HTTP 1.1 / 404 Not Found");
// header("X-Powered-By: none of your business");

function RedirectTo($newLocation){
	header("Location: " .  $newLocation);
exit;
}

$loggedIn = $_GET['loggedIn'];

if ($loggedIn == "1"){
	RedirectTo("FirstPage.php");
} else {
	RedirectTo("http://google.com");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>JClass</title>
        <meta charset="UTF-8">
    </head>
<body>

<pre>
<?php
print_r(headers_list());
?>
</pre>

</body>
</html>