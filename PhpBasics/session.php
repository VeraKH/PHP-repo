<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sessions </title>
        <meta charset="UTF-8">
    </head>
<body>
<?php
$_SESSION["firstName"] = "Vera";
$name = $_SESSION["firstName"];
echo $name;
?>
</body>
</html>