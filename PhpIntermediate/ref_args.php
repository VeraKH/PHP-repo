<!DOCTYPE html>
<html>
    <head>
        <title>References As agruments</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php

function RefTest(&$var) { //the same as we would use the global in the function
	$var = $var*2;
}

$a = 10;
RefTest($a);
echo($a)

?>

</body>
</html>