<?php

if(isset($_POST['link'])){
 	
	$arr = ['mustafa', 'ahmed', 'kogo', 'watch', 'me'];
	$maxmium = 12;
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
		
//	if(strlen($user) > $maxmium){
//		echo 'You are not a user';
//	}else{
//		echo $user;	
//	}
	 
	if(in_array($user, $arr)){
		echo' Welcome Back ',$user;
	}else{
		echo 'What are you doing ,...?';
	}
}
	
	
	
	
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="form_pross.php" method="POST">
	<input type="text" placeholder="email" name= 'user'>
	<input type="password" placeholder="password" name = 'pass'>
	<br>
	<input type="submit" name="link" id="" value="Submit">
	
	
</form>
	

</body>
</html>