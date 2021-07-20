<?php
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';

	$activityID = $_REQUEST['receivedId'];
	echo "$activityID <br>";
	$query = "UPDATE receivedreviews SET STATUS=\"ACCEPTED\" WHERE ID='$activityID'";
	echo "$query";
	if(mysqli_query($con,$query))
	{
		echo "Status Changed!!";
		header("Location:ReceivedReviews.php");
	}
	else
	{
		echo "Status Not Changed!!";
		header("Location:ReceivedReviews.php");
	}
?>