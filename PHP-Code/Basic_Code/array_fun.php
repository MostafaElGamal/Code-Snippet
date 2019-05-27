<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
	$arr = [12.4,53,546,7,43,1,312.2];
	
	echo  max($arr), "<br>";
	echo min($arr), "<br>";
//	print_r($arr);
	sort($arr);
	print_r ($arr);
	
	
	?>
	
</body>
</html>