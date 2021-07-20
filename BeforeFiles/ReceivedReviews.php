<?php
	include 'TempHeader.html';
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Received Reviews</title>
</head>
<body>
	PI :<br>
	<table border="5">
		<th> GIVEN BY </th>
		<th> DOMAIN </th>
		<th> COURSE </th>
		<th> TOPIC </th>
		<th> ACTIVITY TYPE </th>
		<th> ACTIVITY ID </th>
		<th> RATING(STARS) </th>
		<th> ACCEPT/REJECT </th>
		<?php
			$query = "SELECT * FROM receivedreviews WHERE ACTIVITY_TYPE='PI'";
			$result = mysqli_query($con,$query);
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>$row[1]</td>";
					echo "<td>$row[2]</td>";
					echo "<td>$row[3]</td>";
					echo "<td>$row[4]</td>";
					echo "<td>$row[5]</td>";
					echo "<td>$row[6]</td>";
					echo "<td>$row[7]</td>";
					echo "<td><a href='AcceptRating.php?receivedId=$row[0]'>Accept</a> / <a href='localhost/Projects/final_year/Disagreement.php?receivedId=$row[0]'>Reject</a></td>";
				echo "</tr>";
			}
		?>
	</table><br>
	TPS :<br>
	<table border="5">
		<th> GIVEN BY </th>
		<th> DOMAIN </th>
		<th> COURSE </th>
		<th> TOPIC </th>
		<th> ACTIVITY TYPE </th>
		<th> ACTIVITY ID </th>
		<th> RATING(STARS) </th>
		<th> ACCEPT/REJECT </th>
		<?php
			$query = "SELECT * FROM receivedreviews WHERE ACTIVITY_TYPE='TPS'";
			$result = mysqli_query($con,$query);
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>$row[1]</td>";
					echo "<td>$row[2]</td>";
					echo "<td>$row[3]</td>";
					echo "<td>$row[4]</td>";
					echo "<td>$row[5]</td>";
					echo "<td>$row[6]</td>";
					echo "<td>$row[7]</td>";
					echo "<td><a href='AcceptRating.php?receivedId=$row[0]'>Accept</a> / <a href='localhost/Projects/final_year/Disagreement.php?receivedId=$row[0]'>Reject</a></td>";
				echo "</tr>";
			}
		?>
	</table><BR>
	Theory Paper :<br>
	<table border="5">
		<th> GIVEN BY </th>
		<th> DOMAIN </th>
		<th> COURSE </th>
		<th> TOPIC </th>
		<th> ACTIVITY TYPE </th>
		<th> ACTIVITY ID </th>
		<th> RATING(STARS) </th>
		<th> ACCEPT/REJECT </th>
		<?php
			$query = "SELECT * FROM receivedreviews WHERE ACTIVITY_TYPE='THEORY_PAPER'";
			$result = mysqli_query($con,$query);
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>$row[1]</td>";
					echo "<td>$row[2]</td>";
					echo "<td>$row[3]</td>";
					echo "<td>$row[4]</td>";
					echo "<td>$row[5]</td>";
					echo "<td>$row[6]</td>";
					echo "<td>$row[7]</td>";
					echo "<td><a href='AcceptRating.php?receivedId=$row[0]'>Accept</a> / <a href='localhost/Projects/final_year/Disagreement.php?receivedId=$row[0]'>Reject</a></td>";
				echo "</tr>";
			}
		?>
	</table><br>
</body>
</html>