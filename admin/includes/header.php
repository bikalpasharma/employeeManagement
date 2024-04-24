<?php
$page = "";
$page = (isset($_GET['sd']))?$_GET['sd'] : 'home';
if(!in_array($page, array('home', 'adminhome','add-employee','view-employee','assign-project','project-status','logout','add-employee','error','updated','updatedp')))
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
	<title>Admin Dashboard</title>
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
	<div class="header container-fluid">
		<div class="col-md-10 col-md-offset-1">
			<center>
				<img src="images/logo.png" alt="logo here" class="img-responsive">
			</center>
		</div>
		<div class="col-md-8 col-md-offset-2">
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
							<li class="<?php if($page=='adminhome'){echo 'active';} ?>"><a href="adminhome">HOME</a></li>
							<li class="<?php if($page=='add-employee'){echo 'active';} ?>"><a href="add-employee">ADD EMPLOYEE</a></li>
							<!-- <li class="<?php if($page=='view-employee'){echo 'active';} ?>"><a href="view-employee">VIEW EMPLOYEE</a></li> -->
							<li class="<?php if($page=='assign-project'){echo 'active';} ?>"><a href="assign-project">ASSIGN PROJECT</a></li>
							<li class="<?php if($page=='project-status'){echo 'active';} ?>"><a href="project-status">PROJECT STATUS</a></li>
							<!-- <li class="<?php if($page=='chatbox'){echo 'active';} ?>"><a href="chatbox">CHAT BOX</a></li> -->
							<li class="<?php if($page=='logout'){echo 'active';} ?>"><a href="../home">LOG OUT</a></li>
						</ul>
					</center>
				</div>
			</nav>
		</div>
	</div>
