<?php
	include 'SessionCreatedCheck.php';
	include 'TempHeader.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<form action="AddToStudent.php" align="center" method="POST">
		Enrollment Number : <input type="text" name="enrol" id="enrol"><br><br>
		First Name : <input type="text" name="fname" id="fname"><br><br>
		Last Name : <input type="text" name="lname" id="lname"><br><br>
		Fathers Name : <input type="text" name="father" id="father"><br><br>
		Department : <input type="text" name="dept" id="dept"><br><br>
		Year : <input type="number" name="year" id="year"><br><br>
		Semister : <input type="number" name="sem" id="sem"><br><br>
		Number Of KT : <input type="number" name="nokt" id="nokt"><br><br>
		Average Of Coded : <input type="number" name="avgcode" id="avgcode"><br><br>
		<input type="Submit" name="Submit">
	</form>
</body>
</html>