<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "NO";
$dBName = "empdb";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Database Connection Failed";
}

?>