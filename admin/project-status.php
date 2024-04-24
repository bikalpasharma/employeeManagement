<?php
require_once ('includes/dbh.php');
$sql = "SELECT * from projecttable";
$result = mysqli_query($conn, $sql);
?>

<div class="container-fluid" >
	<h2 style="font-size: 25px; text-align: center;">PROJECT DETAILS </h2><br>
	<table cellpadding="10" width="100%">
		<tr bgcolor="#000">
			<th style="text-align:center">ID</th>
			<th style="text-align:center">Project ID</th>
			<th style="text-align:center">Employee ID</th>
			<th style="text-align:center">Project Name</th>
			
			<th style="text-align:center">Due Date</th>
			<th style="text-align:center">Comment </th>
			<th style="text-align:center">Remarks</th>
			<th style="text-align:center">Status</th>
			<th style="text-align:center;">Options</th>
		</tr>
		
		<?php
		while ($projecttable = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$projecttable['id']."</td>";
			echo "<td>".$projecttable['controlid']."</td>";
			
			echo "<td>".$projecttable['empid']."</td>";

			echo "<td>".$projecttable['projectName']."</td>";

		

			echo "<td>".$projecttable['duedate']."</td>";

			echo "<td>".$projecttable['noncomp']."</td>";

			echo "<td>".$projecttable['remarks']."</td>";

			echo "<td>".$projecttable['status']."</td>";

			echo "<td>";
			echo '<a href="updatep.php?id='. $projecttable['id'] .'" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span>&nbsp &nbsp</a>';
			echo '<a href="deletep.php?id='. $projecttable['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';

			echo "</td>";

		}
		?>
	</table>
</div>
