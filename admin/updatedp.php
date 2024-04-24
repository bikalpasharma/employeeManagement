<?php
include('includes/dbh.php');
?>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $controlid = $_POST['controlid'];
    $empid = $_POST['empid'];
    $projectName = $_POST['projectName'];
    $requirement = $_POST['requirement'];
    $applicable = $_POST['applicable'];
    $duedate = $_POST['duedate'];
    $subdate = $_POST['subdate'];
    $noncomp = $_POST['noncomp'];
    $remarks = $_POST['remarks'];
    $status = $_POST['status'];
    

    mysqli_query($conn, "UPDATE projecttable SET controlid='$controlid', empid='$empid', projectName='$projectName', requirement='$requirement', applicable='$applicable', duedate='$duedate', noncomp='$noncomp', remarks='$remarks', status='$status' WHERE id=$id");
    $_SESSION['message'] = "Project updated!"; 
    header('location: project-status');
}
else
{
    echo('Failed');
}
?>