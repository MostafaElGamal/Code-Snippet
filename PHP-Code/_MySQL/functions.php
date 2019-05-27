<?php	include "db.php";?>

<?php
function createRows(){
	

if(isset($_POST['link'])){
		$username = $_POST['user'];
		$pass = $_POST['pass'];	
		
		$connection = mysqli_connect('localhost', 'root', '' ,'logingapp');
		if($connection){
			echo 'We are connected', '<br>';
		}else{
			die('Data Base'); }
	
			$username = mysqli_real_escape_string($connection, $username);
			$pass = mysqli_real_escape_string($connection, $pass);
			
	
			$hashFormat = "$2y$";
			$salt = "iusesomecrazystrings22";
	
			$hashF_and_salt = $hashFormat . $salt;
	
			$password = crypt($pass, $hashF_and_salt);
	
	
		$query = "INSERT INTO users(user_name, first_name , password) 
		VALUES('$username','user', '$password')";
		
		$result = mysqli_query($connection, $query);
	
		if(!$result){
			die('Quey Faild');
		}else{
			echo '<h5>User Created..!</h5>';
		}
	}	
}


function showAllData(){
global $connection;
	
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

if(!$result){
			die('Quey Faild');
			}

while($row = mysqli_fetch_assoc($result)){
	$id = $row['user_id'];						
	echo "<option value='$id'>$id</option>";
}
}

function UpdateTable(){
	
		global $connection;
		$user = $_POST['user'];
		$password = $_POST['pass'];
		$id = $_POST['user_id'];
		
		$query = "UPDATE users SET user_name = '$user', password=$password ";
		$query .= "WHERE user_id = $id";
		        
		$result = mysqli_query($connection, $query);
		if(!$result){
			die("Query Faild man it just Falid". mysqli_error($connection));
		}else{
			echo '<h5>User Updated</h5>';
		}
}

function DeleteUser(){
	global $connection;
	
	$id = $_POST['user_id'];
	
	$query = "DELETE FROM users WHERE user_id = $id";
	
	$result = mysqli_query($connection, $query);
		if(!$result){
			die("Query Faild man it just Falid". mysqli_error($connection));
		}else{
			echo '<h5>User Deleted </h5>';
		}
}

?>