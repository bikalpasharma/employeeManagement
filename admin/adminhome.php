<?php
require_once ('includes/dbh.php');
$sql = "SELECT * from userlist";
$result = mysqli_query($conn, $sql);
?>

<div class="container" >
	<h2 style="font-size: 25px; text-align: center;">EMPLOYEE DETAILS </h2><br>
	<table cellpadding="10" width="100%">
		<tr bgcolor="#000">
			<th style="text-align:center">Seq.</th>
			<th style="text-align:center">Emp. ID</th>
			<th style="text-align:center">Name</th>
			<th style="text-align:center">Email</th>
			<th style="text-align:center">Contact</th>
			<th style="text-align:center">Address</th>
			<th style="text-align:center">Gender</th>
			<th style="text-align:center">Birthday</th>
			<th style="text-align:center">Password</th>
			<th style="text-align:center;">Options</th>
		</tr>
		
		<?php
		$seq = 1;
		while ($userlist = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$seq."</td>";
			echo "<td>".$userlist['id']."</td>";
			
			echo "<td>".$userlist['firstName']." ".$userlist['lastName']."</td>";
			
			echo "<td>".$userlist['email']."</td>";

			echo "<td>".$userlist['contact']."</td>";

			echo "<td>".$userlist['address']."</td>";

			echo "<td>".$userlist['gender']."</td>";

			echo "<td>".$userlist['birthday']."</td>";

			echo "<td>".$userlist['password']."</td>";

			echo "<td>";
			echo '<a href="update.php?id='. $userlist['id'] .'" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span>&nbsp &nbsp</a>';
			echo '<a href="delete.php?id='. $userlist['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';

			echo "</td>";

			$seq+=1;
		}
		?>
	</table>
</div>
