<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
$number = 21;
	
//if($number < 10){
//	echo'Something', '<br>';
//}if($number < 20){
//	echo 'Anthor Thing';
//}
switch($number <= 20){
		
	case 10:
		echo "is it 10";
		break;
	case 9:
		echo "is it 9";
		break;
	case 8:
		echo "is it 8";
		break;
	case 20:
		echo "is it 20";
		
	default:
		echo 'We Could not find any thig';
}
	
?>
</body>
</html>