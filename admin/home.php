<?php

require_once ('includes/dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `alogin` WHERE email = '$email' AND password = '$password'";

//echo "$sql";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
	

	//echo ("logged in");
	header("Location: adminhome");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Invalid Email or Password')
		window.location.href='javascript:history.go(-1)';
		</SCRIPT>");
}
?>