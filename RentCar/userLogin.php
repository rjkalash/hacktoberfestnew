<?php
$userName = $_POST['userName'];
$password = $_POST['password'];

$conn = new mysqli("localhost:3307","root","","dogdata");

$sql1 = "select userName from user where username = '$userName' and password = '$password'";

$result = mysqli_query($conn,$sql1);

$count = mysqli_num_rows($result);

if($count == 1){

	$_SESSION["Username"] = $userName;
	$_SESSION["password"] = $password;
	header('Location: mainMenu.php');

}else{
	echo '<script type = "text/javascript">';
	echo 'alert("Incorrect User Name or Password")';
	echo '</script>';
}
mysqli_close($conn);
?>