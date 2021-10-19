<?php

$userName = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$rePassword = $_POST['rePassword'];


$conn = new mysqli("localhost:3307","root","","dogdata");

if ($password == $rePassword){
	$sql2 = "insert into user(userName,email,password) values('$userName','$email','$password')";

	if(mysqli_query($conn,$sql2)){
		echo '<script type = "text/javascript">';
		echo 'alert("Registration Successful")';
		echo '</script>';
	}
}else{
		echo '<script type = "text/javascript">';
		echo 'alert("Error")';
		echo '</script>';
}
mysqli_close($conn);
?>