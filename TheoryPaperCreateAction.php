<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	include 'TempHeader.html';
	$noOfQuests = $_REQUEST['noOfQuest'];
	$quest = $_REQUEST['quest'];
	$ans = $_REQUEST['ans'];
	$marks = $_REQUEST['marksForQuest'];
	$nameOfUser = $_SESSION['username'];
	$domainOfUser = null;
	$courseOfUser = null;
	$flag = 0;
	$uname = $_SESSION['userID'];
	$query1 = "SELECT DOMAIN,COURSES_TAUGHT FROM userdetails WHERE USERNAME='$uname'";
	$result1 = mysqli_query($con, $query1);
	while($row = mysqli_fetch_array($result1))
	{
		$domainOfUser = $row[0];
		$courseOfUser = $row[1];
	}
	$count = 0;
	$count1 = 1;
	$query4 = "SELECT ID FROM theorypaper";
	$noOfRows = null;
	$result4 = mysqli_query($con, $query4);
	while($row = mysqli_fetch_array($result4))
	{
		$noOfRows = $noOfRows + 1;
		echo "$row[0]";
		// echo "$noOfRows";
	}
	// echo "$noOfRows";
	$count2 = $noOfRows + 1;
	// echo "$count2";
	$query2 = "INSERT INTO theorypaper (ID, NAME_OF_PROFESSOR, DOMAIN, COURSE, NOOFQUEST) VALUES('$count2','$nameOfUser', '$domainOfUser', '$courseOfUser', '$noOfQuests')";
	if(mysqli_query($con,$query2))
	{
		while($count<$noOfQuests)
		{
			$query3 = "INSERT INTO theoryquest(PAPERID, QUESTS, ANS, MARKS) VALUES('$count2','$quest[$count]','$ans[$count]','$marks[$count]')";
			if(mysqli_query($con, $query3))
			{
				echo "RowInserted";
				$flag = $flag + 1;
				echo "$flag";
			}
			$count++;
		}
	}
	if($flag>=$noOfQuests)
	{
		echo "Row Inserted Successfully!!!";
		header("Location:myActivities.php");
	}
	else
	{
		echo "Row Not Inserted";
	}
?>