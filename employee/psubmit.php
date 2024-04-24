
<!-- project submission -->
<?php

require_once ('includes/dbh.php');
//$id = (isset($_GET['id']) ? $_GET['id'] : '');
$pid = $_GET['pid'];
$id = $_GET['id'];
// $date = date('Y-m-d');
// //echo "$date";
$sql = "UPDATE `projecttable` SET `status`='Submitted' WHERE controlid = '$id';";
$result = mysqli_query($conn , $sql);
header("Location: home.php?id=$pid");
?>