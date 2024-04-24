
<?php
include('includes/header.php');
include('includes/dbh.php');
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
$id=$_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM userlist WHERE id=$id");


while($row = mysqli_fetch_array($result))
{
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $email = $row['email'];
    $contact = $row['contact'];
    $address = $row['address'];
    $birthday = $row['birthday'];
    $gender = $row['gender'];
    $password = $row['password'];
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-5">Update Record</h2>
            <p>Please edit the input values and submit to update the employee record.</p>
            <form action="updatedprofile.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstName" class="form-control" value="<?php echo $firstName; ?>">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastName" class="form-control" value="<?php echo $lastName; ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                </div>

                <div class="form-group">
                    <label>Birthday</label>
                    <input type="date" name="birthday" class="form-control" value="<?php echo $birthday; ?>">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" class="form-control" value="<?php echo $gender; ?>">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $password; ?>">
                </div>


                <button class="btn" type="submit" name="update" >Update</button>

                <a href="../home" class="btn btn-warning">Cancel</a>
            </form>
        </div>
    </div>        
</div>



<?php
include('includes/footer.php');
?>