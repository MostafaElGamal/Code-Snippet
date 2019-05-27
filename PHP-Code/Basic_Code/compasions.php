<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!--
	<h1>Comparsion Operators</h1>
	<pre>
		equal ==
		identcal ===
		compare > <  >= <= <>
		not equal !=
		not identcal !==
		-----------------------------------
		<h1>Logical Operators</h1>
		
		And &&
		OR ||
		NOT !
		-----------------------------------
	</pre>
-->
	
	<?php 
	
	if(4 === "4"){
		echo 'You will never See me';
	}if( 4 !==	 "4"){
		echo "Now you will see me ";
	}
	
	if( 100 > 99 && 100 >= 99){
		echo 'Remeber and statement must the both condtion to be true';
		
	}elseif(100 > 98 && 99 > 100){
		echo 'I will not gonna go out only one condation is True';
	}
	
	if(true || false){
		echo 'Befor you try it , Did This will work ?', '<br>' , 'in || need only one condation is true';
	}
	if( 10 > 10 ||! 9 >= 5){
		echo 'This will work im sure';	
	}
	?>
</body>
</html>