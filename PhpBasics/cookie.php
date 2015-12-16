<?php

// setting cookies must be before any code sent to the browsers unless your output_buffering is ON

$name = "test";
$value = "hello";
$expire = time() + (60*60*24*7); //add seconds

// setcookie($name, $value, $expire); //set cookie

// setcookie($name); //disappears only after request.  //unset not the best variant

// setcookie($name, null, $expire); //okay but still the variant below is better

setcookie($name, $value, time()-3600);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>JClass</title>
        <meta charset="UTF-8">
    </head>
<body>


<?php

// if(isset($COOKE["test"])){
// $test =$_COOKIE["test"];
// echo $test;
// } else {
// echo " ";
// }

//another way to write down what is above

$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : " ";
echo $test;


// print_r($_COOKIE);
?>

</body>
</html>