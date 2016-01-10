<?php

//no $this keyword
class Student {
	static $total_students = 0;

	static function WelcomeStudents($var='Hello')
	{
		echo "{$var} students.";
	}

	static function AddStudent()
	{
		Student::$total_students++;
		return Student::$total_students;
	}
}

echo Student::$total_students;
echo "<br/>";
echo Student::WelcomeStudents("Hey");
echo "<br/>";
echo Student::$total_students=5;
echo "<br/>";
echo Student::$total_students;
echo "<br/>";
echo Student::AddStudent();
echo "<br/>";
echo Student::AddStudent();
?>
