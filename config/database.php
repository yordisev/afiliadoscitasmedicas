
<?php

$conn = new mysqli('localhost', 'root', '', 'db_medicina');

if($conn->connect_error){
	echo $error -> $conn->connect_error;
}



// function db()
// 	{
// 		return $mysqli=mysqli_connect("localhost","root","","db_medicina");
// 	}
?>