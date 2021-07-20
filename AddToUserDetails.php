<?php
	include 'MysqlConnectionCreated.php';
	// include 'SessionCreatedCheck.php';
	$username = $_REQUEST['uname'];
	$password = $_REQUEST['pass'];
	$repass = $_REQUEST['repass'];
	$fname = $_REQUEST['fname'];
	$mname = $_REQUEST['mname'];
	$lname = $_REQUEST['lname'];
	$gender = $_REQUEST['gender'];
	$clg = $_REQUEST['college'];
	$state = $_REQUEST['state'];
	$city = $_REQUEST['city'];
	$domain = $_REQUEST['domain'];
	$course = $_REQUEST['course'];
	$expr = $_REQUEST['experience'];
	$contact = $_REQUEST['contact'];
	$mail = $_REQUEST['mailId'];
	if(strcmp($password,$repass)==0)
	{
		$query = "INSERT INTO userdetails (FIRST_NAME,MIDDLE_NAME,LAST_NAME,GENDER,USERNAME,PASSWORD,DOMAIN,COURSES_TAUGHT,STATE,CITY,COLLEGEOFTEACHING,EXPERIENCE,CONTACT,EMAIL) VALUES('$fname','$mname','$lname','$gender','$username','$password','$domain','$course','$state','$city','$clg','$expr','$contact','$mail')";
		if(mysqli_query($con,$query))
		{
			echo "Row Inserted Successfully!!";
			header("location:LoginPage.html");
		}
		else
		{
			echo "Row not inserted";
		}
	}
?>