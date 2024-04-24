
<?php
include('includes/header.php');
include('includes/dbh.php');
?>

<?php
$id=$_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM projecttable WHERE id=$id");


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
    $status = $row['status'];
}
?>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Update Record</h2>
                <p>Please edit the input values and submit to update the employee record.</p>
                <form action="updatedp" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Project ID</label>
                        <input type="text" name="controlid" class="form-control" value="<?php echo $controlid; ?>">
                    </div>
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="empid" class="form-control" value="<?php echo $empid; ?>">
                    </div>
                    <div class="form-group">
                        <label>Project Name</label>
                        <input type="text" name="projectName" class="form-control" value="<?php echo $projectName; ?>">
                    </div>

                    <div class="form-group">
                        <label>Due Date</label>
                        <input type="date" name="duedate" class="form-control" value="<?php echo $duedate; ?>">
                    </div>

                    <div class="form-group">
                        <label>Comment</label>
                        <input type="text" name="noncomp" class="form-control" value="<?php echo $noncomp; ?>">
                    </div>

                    <div class="form-group">
                        <label>Remarks</label>
                        <input type="text" name="remarks" class="form-control" value="<?php echo $remarks; ?>">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" value="<?php echo $status; ?>">
                    </div>
                    <button class="btn" type="submit" name="update" >Update</button>

                    <a href="project-status" class="btn btn-warning">Cancel</a>
                </form>
            </div>
        </div>        
    </div>
</div>



<?php
include('includes/footer.php');
?>