<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php
		$user = ['Ahmed', 'Sayed', 'El-Gamel'];
		$arr = ['first_name'=> 'Mutafa', 'second_name'=>'Sayed', 'last_name'=>'El-Gamel'];
		$str = 'This is A String';
			
			foreach($arr as $fullname){
				echo $fullname , "<br>";
			}            
	
		for($i=0; $i <= 15; $i++){
			echo $str[$i], '<br>';
		}
	
		echo $str[0]
	?>
</body>
</html>