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