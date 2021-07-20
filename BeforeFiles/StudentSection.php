<?php
	include 'SessionCreatedCheck.php';
	include 'TempHeader.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Section</title>
</head>
<body>
	<button id="List" onclick="location.href='ListOfStudents.php'">List Of Students</button>
	<!-- <button id="signUp" onclick="location.href='SignUp.php'">Sign Up</button> -->
	<button id="CO" onclick="location.href='COAttainment.php'">Co-Attainment</button>
	<button id="marks" onclick="location.href='StudentMarksCourseWise.php'">Course Wise Marks</button>
</body>
</html>