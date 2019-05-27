<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	//This is array and also you can use array(...,...,..)
	$list = ['one','two', 'three'];
	
	// This is Associative List like Dictionary in python!!
	$ass_list = ['one' => "I'm the first Value in ass array", 
				 'two' => "I'm the Second Value in ass array", 
				 'three' => "I'm the Third Value in ass array"];
	
	$ass_list['one'] = 'This is A rerfrince n One';	
	
	
	
	echo $list[0] ,"<br>", $ass_list['one'];
	?>
</body>
</html>