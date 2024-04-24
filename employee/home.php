<?php 
$empid = (isset($_GET['id']) ? $_GET['id'] : '');
require_once ('includes/dbh.php');

$sql1 = "SELECT * FROM `userlist` where id = '$empid'";
$result1 = mysqli_query($conn, $sql1);
$employeen = mysqli_fetch_array($result1);
$empName = ($employeen['firstName']);
$idnn =  ($employeen['id']);

$sql = "SELECT * FROM `projecttable` where empid = '$empid'";
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
						<li class="active"><a href="#">MY PROFILE</a></li>
						
						<li><a href="logout.php">LOG OUT</a></li>
					</ul>
				</center>
			</div>
		</nav>
	</div>

</div>



<div class="container-fluid">
	<h4 style="text-align: center;">Howdy <?php echo "$empName"; ?>  </h4>
	<h2 style="font-size: 25px; text-align: center;">YOUR ASSIGNED PROJECTS </h2><br>
	<table>
		<tr>

			<th style="text-align:center;">Control ID</th>
			<th style="text-align:center;">Employee ID</th>
			<th style="text-align:center;">Project Name</th>
			<th style="text-align:center;">Due Date</th>
			<th style="text-align:center;">Comment</th>
			<th style="text-align:center;">Remarks</th>
			<th style="text-align:center;">Status</th>
			<th style="text-align:center;">Options</th>
		</tr>

		<?php
		while ($projecttable = mysqli_fetch_assoc($result)) {

			echo "<tr>";
			echo "<td>".$projecttable['controlid']."</td>";
			echo "<td>".$projecttable['empid']."</td>";
			echo "<td>".$projecttable['projectName']."</td>";
			echo "<td>".$projecttable['duedate']."</td>";
			echo "<td>".$projecttable['noncomp']."</td>";
			echo "<td>".$projecttable['remarks']."</td>";
			echo "<td>".$projecttable['status']."</td>";
			echo "<td><a href=\"psubmit.php?pid=$projecttable[empid]&id=$projecttable[controlid]\">Submit</a>";
		}


		?>

	</table>
</div>

<div class="container-fluid">
	<br><br>
	<h4 style="text-align:center;">
		<a href="updateprofile.php?id=<?php echo $idnn ?>">Edit Your Profile</a> &nbsp &nbsp
		<a href="mailto:mail@admin.com">Contact Administrator</a>
	</h4>
</div>

<?php
include('includes/footer.php');
?>