<?php

// Method within the class
class Book
{
	var $title;
	var $author;
	var $yearOfPublishing;
	var $format = "paperback";

	function bookPrice(){
		return "1200 rub. ";
	}

	// keyword this
	function summary(){
		// return "Author: " . $ this ->author . ".";
		return "Book Price: " . $this ->bookPrice();
	}
}

$book = new book;

$book ->title="Lord of the Rings. ";
$book ->author="JR Tolkien";
$book ->yearOfPublishing="1928";
$book ->format; // ="Hardcover";

echo "Title: " . $book->title . $book -> summary();


//Inheritance
class Animal 
{
	var $color;
	var $location = "North America. ";

	function getColor() { return $this->color; }
	function getLocation() { return $this->location; }
}

class Fish extends Animal
{
}

$jellyfish = new Fish;

$jellyfish ->location = "Pacific Ocean. ";
$jellyfish ->color = "blue. ";

echo $jellyfish->getColor() . $jellyfish ->getLocation();

?>