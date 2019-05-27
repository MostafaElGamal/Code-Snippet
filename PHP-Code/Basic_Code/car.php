<?php 
	
class Car{
	
	var $fuck = 'This is the time saying Fuck you to the world';
	var $wheel = 4;
	var $doors = 4;
	var $hood = 1;
		
	function MoveWheels(){
		$this -> wheels = 10;
		e cho $this -> wheels;
	}
	
	function CreateDoors($num){
		$this -> doors = $num;
		echo $this -> doors;
	}
	
}

$BMW = new Car();
$truck = new Car();

//echo $BMW ->  wheel, '<br>';	

$truck -> CreateDoors(19);

?>