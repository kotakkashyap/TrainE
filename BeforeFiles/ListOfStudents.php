<?php
	include 'SessionCreatedCheck.php';
	include 'TempHeader.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Of Students</title>
</head>
<body>
	<table border="5" align="center">
		<th>ENROLLMENT NUMBER</th>
		<th>FIRST NAME</th>
		<th>LAST NAME</th>
		<th>FATHERS NAME</th>
		<th>DEPARTMENT</th>
		<th>YEAR</th>
		<th>SEMISTER</th>
		<th>NUMBER OF KT</th>
		<th>AVERAGE OF CODED</th>
		<th>REMOVE</th>
		<?php
			include 'MysqlConnectionCreated.php';
			$query = "SELECT * FROM student";
			$result = mysqli_query($con,$query);
			// ini_set("display_errors", 0);
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
					echo "<td>$row[8]</td>";
					echo "<td>$row[9]</td>";
					echo "<td><button id='Remove' onclick=\"location.href='RemoveStudentAction.php?StudentId=$row[0]'&enroll=$row[1]\">Delete</button></td>";
				echo "</tr>";
			}
		?>
	</table><br>
	<!-- <form align="center"> -->
		<button id="AddStudent" onclick="location.href='AddStudent.php'">Add Student</button>
	<!-- </form> -->
</body>
</html>