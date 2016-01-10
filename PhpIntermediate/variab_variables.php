<!DOCTYPE html>
<html>
    <head>
        <title>Variable variable</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php
$a = "Vera";
$b = "Mari";
$c = "Andy";

$student = array('a', 'b', 'c');

echo $$student[1] . "<br />";

foreach ($student as $seat) {
	echo $$seat . "<br />";
}

?>

</body>
</html>