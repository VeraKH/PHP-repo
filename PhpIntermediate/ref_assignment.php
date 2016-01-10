<!DOCTYPE html>
<html>
    <head>
        <title>Reference Assignment</title>
        <meta charset="UTF-8">
    </head>
<body>

<?php

$a = 1;
$b = $a;
$b=2;
echo $a/$b;

echo "<br/>";

$a = 1;
$b =& $a;
$b=2;
echo $a/$b;

echo "<br/>";

unset($b);
echo "{$a} /  {$b}";
?>

</body>
</html>