<?php 
	
class Car{
	
	private static $fuck = 'This is the time saying Fuck you to the world';
	var $wheel = 4;
	var $doors = 4;
	var $hood = 1;
		
	function MoveWheels(){
		echo Car::$fuck;
	}
}
	

class Test extends Car{
	
}

$BMW = new Car();
$test = new Test;

//echo $BMW::$fuck

//echo $BMW -> fuck;	
echo $test::$fuck

?>