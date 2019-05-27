<?php

$file = 'example.txt';
	
if($handel = fopen($file, 'r')){
	
	echo $content = fread($handel , 100) ;

	fclose($handel);

}else{
	echo "The file could not work";
}


//This for deleteing and file
unlink('example.txt')
?>