<?php
class Person {
	public $name;
	public $age;
	public function __construct($name, $age) {
		$this -> name = $name;
		$this -> age = $age;
	}
	public function introduce() {
		echo "My name is {$this -> name}. My age is {$this -> age}";
	}
}

class sad extends Person {
	
	public function sayHello() {
		echo "Hello,  <br>";
	}
}
$p = new sad('sadaf', 29);
$p -> sayHello();
$p -> introduce();
?>