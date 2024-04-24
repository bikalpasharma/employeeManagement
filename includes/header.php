<?php
$page = "";
$page = (isset($_GET['sd']))?$_GET['sd'] : 'home';
if(!in_array($page, array('home', 'admin_login','employee_login','about','contact')))
{
	include("404.php");
	exit;
}
?>

<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Management</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta http-equiv="Cache-control" content="no-cache">

	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@700&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>

<body>
	<div class="header" style="background:#fff">
		<center>
			<a href="./"><img src="images/emp.png" height='50' alt="logo here" class="img-responsive" style="background:#fff"></a>
		</center>
	</div>
