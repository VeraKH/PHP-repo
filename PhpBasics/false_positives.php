<!DOCTYPE html>
<html>
<head>
    <title>False Positives</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">    
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
</head>
<body> 

<?php 

	function is_equal($value1, $value2) {
		$output = "{$value1} == {$value2} : ";
		if ($value1 == $value2) {
			$output .= "true<br />";
		} else {
			$output .= "false<br ?>";
		}
		return $output;
	}

	/*
	string VS null: converts null to "";
	 boolean vs other: converts other to boolean;
	 number vs other: convert other to number;


	 */
	echo is_equal("0", false);
	echo is_equal("4", true); // -
	echo is_equal(0, null); // - 
	echo is_equal(0, "0");
	echo is_equal(0,  "");
	echo is_equal(0, "a");
	echo is_equal("1", "01");
	echo is_equal("", null);
	echo is_equal(3, "3 dogs");
	echo is_equal(100, "1e2");
	echo is_equal(100, 100.00);
	echo is_equal("abs", true);
	echo is_equal("123", "   123");
	echo is_equal("123", "+0123");


	function is_exact($value1, $value2) {
		$output = "{$value1} === {$value2} : ";
		if ($value1 === $value2) {
			$output .= "true<br />";
		} else {
			$output .= "false<br ?>";
		}
		return $output;
	}
	
	echo "<br />";

	echo is_exact("0", false);
	echo is_exact("4", true); // -
	echo is_exact(0, null); // - 
	echo is_exact(0, "0");
	echo is_exact(0,  "");
	echo is_exact(0, "a");
	echo is_exact("1", "01");
	echo is_exact("", null);
	echo is_exact(3, "3 dogs");
	echo is_exact(100, "1e2");
	echo is_exact(100, 100.00);
	echo is_exact("abs", true);
	echo is_exact("123", "   123");
	echo is_exact("123", "+0123");

?>

</body>
</html>