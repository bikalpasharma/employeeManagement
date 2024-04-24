<?php 
$id = (isset($_GET['id']) ? $_GET['id'] : '');
require_once ('includes/dbh.php');
$sql = "SELECT * FROM `projecttable` where empid = '$id'";
$result = mysqli_query($conn, $sql);

?>
<?php 
include('includes/header.php');
?>
<div class="header container-fluid">
    <div class="col-md-10 col-md-offset-1">
        <center>
            <img src="images/logo.png" alt="logo here" class="img-responsive">
        </center>
    </div>
    <div class="col-md-4 col-md-offset-4">

        <nav class="navbar  navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only" >Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="clearfix"></div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <center>
                    <ul class="nav navbar-nav ">
                        <li class="active"><a href="home.php?id=<?php echo $id?>">HOME</a></li>
                        <li><a href="my-profile.php?id=<?php echo $id?>">MY PROFILE</a></li>
                        <li><a href="../home">LOG OUT</a></li>
                    </ul>
                </center>
            </div>
        </nav>
    </div>

</div>
<?php
include('includes/dbh.php');
$id = $_POST['id'];
$realid = $_POST['realid'];

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
    $noncomp = $_POST['noncomp'];
    $remarks = $_POST['remarks'];
    

    mysqli_query($conn, "UPDATE projecttable SET controlid='$controlid', empid='$empid', projectName='$projectName', requirement='$requirement', applicable='$applicable', duedate='$duedate', noncomp='$noncomp', remarks='$remarks' WHERE id=$id");
    $_SESSION['message'] = "Project updated!"; 

    // echo "<center>"."Updated Successfully"."</center>";
    header('location:../home');
}
else
{
    echo('Failed');
}
?>
<?php
include('includes/footer.php');
?>