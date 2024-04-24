<?php
include('includes/dbh.php');
?>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    

    mysqli_query($conn, "UPDATE userlist SET firstName='$firstName', lastName='$lastName', email='$email', contact='$contact', address='$address', birthday='$birthday', gender='$gender', password='$password' WHERE id=$id");
    $_SESSION['message'] = "Address updated!"; 
    header('location: adminhome');
}
else
{
    echo('Failed');
}
?>