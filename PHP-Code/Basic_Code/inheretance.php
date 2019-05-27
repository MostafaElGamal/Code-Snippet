<?php 
	
class Car{
	
	var $fuck = 'This is the time saying Fuck you to the world';
	var $wheel = 4;
	var $doors = 4;
	var $hood = 1;
		
	function MoveWheels(){
		$this -> wheels = 10;
		echo $this -> wheels;
	}
	
	function CreateDoors($num){
		$this -> doors = $num;
		echo $this -> doors;
	}
	
}

$BMW = new Car();

class Plane extends Car{
	
	var $wheel = 20;
}

$jet = new Plane();
echo $jet -> MoveWheels();

?>