d<!DOCTYPE html>
<html>
    <head>
        <title>Variable variable</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php
$numbers = array("one",2,3,4,5,6);
print_r($numbers);
echo("<br /><br />");

$a = array_shift($numbers);
echo "a: " . $a;
echo("<br />");
print_r($numbers);
echo("<br /><br />");

$b = array_unshift($numbers, "first");
echo "b: " . $b;
echo("<br />");
print_r($numbers);

echo("<br /><br />");

$c = array_push($numbers, "last");
echo "c: " . $c;
echo("<br />");
print_r($numbers);

echo("<br /><br />");

$d = array_pop($numbers);
echo "d: " . $d;
echo("<br />");
print_r($numbers);


?>

</body>
</html>