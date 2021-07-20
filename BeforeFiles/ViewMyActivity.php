<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	include 'TempHeader.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title>View My Activity</title>
</head>
</html>
<?php
	$idOfActivity = $_REQUEST['activityID'];
	$typeOfActivity = $_REQUEST['activityType'];
	// echo "id : $idOfActivity";
	// echo "type : $typeOfActivity";
	$pi = "PI";
	$tps = "TPS";
	$theory = "THEORY_PAPER";
	// echo "strcmp($pi,$typeOfActivity)";
	if(strcmp($pi,$typeOfActivity)==0)
	{
		// echo "inside Pi";
		$query = "SELECT * FROM piactivity WHERE ID='$idOfActivity'";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result))
		{
			echo "Name Of Professor = $row[1]<br>";
			echo "Domain = $row[2]<br>";
			echo "Course = $row[3]<br>";
			echo "Topic = $row[4]<br>";
			echo "Type = $row[5]<br>";
			echo "Concept Being Addressed = $row[6]<br>";
			echo "Concept Question = $row[7]<br>";
			echo "Correct Answer = $row[8]<br>";
			echo "Plausible Distractors = $row[9]<br>";
		}
	}
	elseif(strcmp($tps,$typeOfActivity)==0)
	{
		// echo "Inside tps";
		$query = "SELECT * FROM tpsactivity WHERE ID='$idOfActivity'";
		// echo "$query";?
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result))
		{
			echo "Name Of Professor = $row[1]<br>";
			echo "Domain = $row[2]<br>";
			echo "Course = $row[3]<br>";
			echo "Topic = $row[4]<br>";
			echo "Type = $row[5]<br><br>";
			echo "Think Phase<br><br>";
			echo "Duration = $row[6]<br>";
			echo "Guiding Question = $row[7]<br>";
			echo "Desired Answer = $row[8]<br><br>";
			echo "Pair Phase<br><br>";
			echo "Duration = $row[9]<br>";
			echo "Guiding Question = $row[10]<br>";
			echo "Desired Answer = $row[11]<br><br>";
			echo "Share Phase<br><br>";
			echo "Duration = $row[12]<br>";
			echo "Guiding Question = $row[13]<br>";
			echo "Desired Answer = $row[14]<br><br>";
		}
	}
	elseif(strcmp($theory,$typeOfActivity)==0)
	{
		$count1 = 1;
		// echo "Inside tps";
		$query = "SELECT * FROM theorypaper WHERE ID='$idOfActivity'";
		// echo "$query";?
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result))
		{
			echo "Name Of Professor = $row[1]<br>";
			echo "Domain = $row[2]<br>";
			echo "Course = $row[3]<br>";
			echo "Type = $row[4]<br><br>";
			$query2 = "SELECT * FROM theoryquest WHERE PAPERID='$row[0]'";
			// echo "$query2";
			$result2 = mysqli_query($con, $query2);
			while($row1 = mysqli_fetch_array($result2))
			{
				// echo "inside second while";
				echo "Q$count1 : $row1[2] -- $row1[4]<br>";
				echo "A$count1 : $row1[3]<br><br>";
				$count1++;
			}
		}
	}
?>