<?php 

function HasPresence($value) {
	return isset($value) && $value !== "";
}

function HasMaxLength($value, $max){
	return (strlen($value) <= $max); 
}

function SetInclusion ($value, $set) {
	return (in_array($value, $set));
  }

  function FormErrors($errors) {
	$output = "";
	if (!empty($errors)) {
		$output .= "<div class = \"errors\">";
		$output .= "Please fix the following errors: <ul>";
		foreach ($errors as $key => $error) {
			$output .=  "<li>{$error}</li>";
		}
		$output .= "</ul>";
		$output .= "</div>";
	}
		return $output;
}

function ValidateMaxLengths($fields_with_max_lengths){
	global $errors;	
	foreach ($fields_with_max_lengths as $field => $max) {
		$value = trim($_POST[$field]);
		if (!HasMaxLength($value, $max)) {
			$errors[$field] = ucfirst($field) . " is too long";
		}
	}
}

?>
