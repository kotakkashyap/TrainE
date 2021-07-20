<?php
	include 'SessionCreatedCheck.php';
	include 'TempHeader.html';
	include 'MysqlConnectionCreated.php';
	$topicFromCourse = $_REQUEST['topicFromCourse'];
	$duration1 = $_REQUEST['duration1'];
	$duration2 = $_REQUEST['duration2'];
	$duration3 = $_REQUEST['duration3'];
	$guideQuest1 = $_REQUEST['guideQuest1'];
	$guideQuest2 = $_REQUEST['guideQuest2'];
	$guideQuest3 = $_REQUEST['guideQuest3'];
	$desireOutput1 = $_REQUEST['desireOutput1'];
	$desireOutput2 = $_REQUEST['desireOutput2'];
	$desireOutput3 = $_REQUEST['desireOutput3'];
	$nameOfTopic = null;
	$domainName = null;
	$courseName = null;
	$uname = $_SESSION['userID'];
	$nameOfProfessor = $_SESSION['username'];
	$query1 = "SELECT DOMAIN,COURSES_TAUG	HT FROM userdetails WHERE USERNAME='$uname'";
	$result1 = mysqli_query($con, $query1);
	while($row = mysqli_fetch_array($result1))
	{
		$domainName = $row[0];
		$courseName = $row[1];
	}
	$query2 = "SELECT TOPIC FROM coursewisetopic WHERE ID='$topicFromCourse'";
	$result2 = mysqli_query($con, $query2);
	while($row = mysqli_fetch_array($result2))
	{
		$nameOfTopic = $row[0];
	}
	echo "Topic : $nameOfTopic<br><br>";
	echo "THINK PHASE<br><br>";
	echo "Duration : $duration1<br>";
	echo "Guiding Question : $guideQuest1<br>";
	echo "Desired Output : $desireOutput1<br><br>";
	echo "PAIR PHASE<br><br>";
	echo "Duration : $duration2<br>";
	echo "Guiding Question : $guideQuest2<br>";
	echo "Desired Output : $desireOutput2<br><br>";
	echo "SHARE PHASE<br><br>";
	echo "Duration : $duration3<br>";
	echo "Guiding Question : $guideQuest3<br>";
	echo "Desired Output : $desireOutput3<br><br>";
	$query3 = "INSERT INTO tpsactivity (NAME_OF_PROFESSOR, DOMAIN, COURSE, TOPIC, THINKTIME, THINKQUEST, THINKANS, PAIRTIME, PAIRQUEST, PAIRANS, SHARETIME, SHAREQUEST, SHAREANS) VALUES('$nameOfProfessor', '$domainName', '$courseName', '$nameOfTopic', '$duration1', '$guideQuest1', '$desireOutput1', '$duration2', '$guideQuest2', '$desireOutput2', '$duration3', '$guideQuest3', '$desireOutput3')";
	if(mysqli_query($con, $query3))
	{
		echo "Row Inserted Successfully!!";
		header("Location:myActivities.php");
	}
	else
	{
		echo "Row Not Inserted!!";
		header("Location:TPSActCreate.php");
	}
?>