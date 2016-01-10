<!DOCTYPE html>
<html>
    <head>
        <title>Date Time : Formating</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php

$timestamp = time();
echo strftime("The date today is: %d.%m.%Y");
echo "<br/>";

function RemoveZero($date_to_format) {
	$without_zero = str_replace("*0", "", $date_to_format);
	$cleaned_string = str_replace("*", "", $without_zero);
	return $cleaned_string;
}

echo RemoveZero(strftime("The date today is: *%d.*%m.%Y"));

echo("<hr/>");
$mysql_datetime = RemoveZero(strftime("*%d/*%m/%Y %H:%M:%S", $timestamp));
echo($mysql_datetime); // 7/1/2016 15:37:46 



?>

</body>
</html>