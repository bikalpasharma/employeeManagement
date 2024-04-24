<?php
$id=$_GET["id"];
$realid=$id;
include('includes/dbh.php');
$result = mysqli_query($conn, "SELECT * FROM projecttable WHERE id=$id");
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

        
    </div>

</div>


<?php

while($row = mysqli_fetch_array($result))
{
    $controlid = $row['controlid'];
    $empid = $row['empid'];
    $projectName = $row['projectName'];
    $requirement = $row['requirement'];
    $applicable = $row['applicable'];
    $duedate = $row['duedate'];
    $noncomp = $row['noncomp'];
    $remarks = $row['remarks'];
}
?>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Update Record</h2>
                <p>Please edit the input values and submit to update the employee record.</p>
                <form action="updated.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="realid" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Project ID</label>
                        <input type="text" name="controlid" class="form-control" value="<?php echo $controlid; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="empid" class="form-control" value="<?php echo $empid; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Project Name</label>
                        <input type="text" name="projectName" class="form-control" value="<?php echo $projectName; ?>" readonly>
                    </div>


                    <!-- <div class="form-group">
                        <label>Due Date</label>

                    </div> -->
                    <input type="hidden" name="duedate" class="form-control" value="<?php echo $duedate; ?>">
                    <div class="form-group">
                        <label>Comment</label>
                        <input type="text" name="noncomp" class="form-control" value="<?php echo $noncomp; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <input type="text" name="remarks" class="form-control" value="<?php echo $remarks; ?>">
                    </div>


                    <button class="btn" type="submit" name="update" >Update</button>

                    <a href="../home" class="btn btn-warning">Cancel</a>
                </form>
            </div>
        </div>        
    </div>
</div>



<?php
include('includes/footer.php');
?>