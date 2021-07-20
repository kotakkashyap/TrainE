<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	$enrol = $_REQUEST['enrol'];
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$father = $_REQUEST['father'];
	$dept = $_REQUEST['dept'];
	$year = $_REQUEST['year'];
	$sem = $_REQUEST['sem'];
	$nokt = $_REQUEST['nokt'];
	$avgcode = $_REQUEST['avgcode'];

	$query = "INSERT INTO student(ENROLLMENT_NUMBER,FIRST_NAME,LAST_NAME,FATHERS_NAME,DEPARTMENT,SEMISTER,YEAR,NUMBER_OF_KT,AVERAGE_OF_CODED) VALUES('$enrol', '$fname', '$lname', '$father', '$dept', '$year', '$sem', '$nokt', '$avgcode'";
	if(mysqli_query($con,$query))
	{
		echo "Row Inserted Successfully!!";
		header("location:ListOfStudent.php");
	}
	else
	{
		echo "Row Not Inserted!!";
	}
?> 