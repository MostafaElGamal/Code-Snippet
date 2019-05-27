<?php 
	
class Car{
	
	private $fuck = 'This is the time saying Fuck you to the world';
	public $wheel = 7 ;
	protected $doors = 4;
	var $hood = 1;
	
	
	
	
}

$BMW = new Car();


$semi = new Semi();
$semi -> ShowAtt();


class Semi extends Car{
	
	function ShowAtt(){
		echo $this->fuck, '<br>';
		echo $this->wheel, '<br>';
		echo $this->doors, '<br>';
	}
}

?>