<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$birthday =$_POST['birthday'];
$password =$_POST['password'];


$sql = "INSERT INTO `userlist`(`id`, `firstName`, `lastName`, `email`, `contact`, `address`, `gender`, `birthday`, `password`) 

VALUES ('','$firstname','$lastName','$email',$contact,'$address','$gender','$birthday','$password')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

if(($result) == 1)
{

    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Registered')
        window.location.href='../adminhome';
        </SCRIPT>");
}

else
{
   echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Register')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}






?>