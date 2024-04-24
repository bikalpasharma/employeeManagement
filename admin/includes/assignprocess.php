<?php

require_once ('dbh.php');

$controlid = $_POST['controlid'];
$empid = $_POST['empid'];
$projectName = $_POST['projectName'];
$requirement = $_POST['requirement'];
$applicable = $_POST['applicable'];
$duedate = $_POST['duedate'];
$noncomp = $_POST['noncomp'];
$remarks = $_POST['remarks'];
$status = $_POST['status'];


$sql = "INSERT INTO `projecttable`(`id`, `controlid`, `empid`, `projectName` , `requirement` , `applicable`, `duedate` , `noncomp` , `remarks` , `status`) 

VALUES ('','$controlid','$empid','$projectName','$requirement','$applicable','$duedate','$noncomp','$remarks','$status')";

$result = mysqli_query($conn, $sql);

$last_id = $conn->insert_id;

if(($result) == 1){

    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Assigned')
        window.location.href='../project-status';
        </SCRIPT>");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Assign')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
}




?>