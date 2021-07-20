<?php
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';
	include 'TempHeader.html';
	$type = $_REQUEST['activityType'];
	$id = $_REQUEST['activityID'];
	echo "<input type='hidden' name='idOfAct' id='idOfAct' value='$id'>";
	$pi = "PI";
	$tps = "TPS";
	$theory =  "THEORY_PAPER";
	if(strcmp($pi,$type)==0)
	{
		$query = "SELECT * FROM piactivity WHERE ID='$id'";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result))
		{
			echo "Name Of Professor : $row[1]<br><br>";
			$query2 = "SELECT DOMAIN FROM domaintable WHERE ID='$row[2]'";
			$result2 = mysqli_query($con, $query2);
			while($row2 = mysqli_fetch_array($result2))
			{
				echo "Domain = $row2[0]<br><br>";
			}
			$query3 = "SELECT COURSE FROM domainsemcourse WHERE ID='$row[3]'";
			$result3 = mysqli_query($con, $query3);
			while($row3 = mysqli_fetch_array($result3))
			{
				echo "Course = $row3[0]<br><br>";
			}
			echo "Topic = $row[4]<br><br>";
			echo "Type = $row[5]<br><br>";
			echo "Concept Being Addressed = $row[6]<br><br>";
			echo "Concept Question = $row[7]<br><br>";
			echo "Correct Answer = $row[8]<br><br>";
			echo "Plausible Distractors = $row[9]<br><br>";
		}
	}
	elseif(strcmp($tps,$type)==0)
	{
		$query = "SELECT * FROM tpsactivity WHERE ID='$id'";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result))
		{
			echo "Name Of Professor : $row[1]<br><br>";
			$query2 = "SELECT DOMAIN FROM domaintable WHERE ID='$row[2]'";
			$result2 = mysqli_query($con, $query2);
			while($row2 = mysqli_fetch_array($result2))
			{
				echo "Domain = $row2[0]<br><br>";
			}
			$query3 = "SELECT COURSE FROM domainsemcourse WHERE ID='$row[3]'";
			$result3 = mysqli_query($con, $query3);
			while($row3 = mysqli_fetch_array($result3))
			{
				echo "Course = $row3[0]<br><br>";
			}
			echo "Topic = $row[4]<br><br>";
			echo "Type = $row[5]<br><br>";
			echo "THINK PHASE<br><br>";
			echo "Duration = $row[6]<br>";
			echo "Question = $row[7]<br>";
			echo "Answer = $row[8]<br><br>";
			echo "PAIR PHASE<br><br>";
			echo "Duration = $row[9]<br>";
			echo "Question = $row[10]<br>";
			echo "Answer = $row[11]<br><br>";
			echo "SHARE PHASE<br><br>";
			echo "Duration = $row[12]<br>";
			echo "Question = $row[13]<br>";
			echo "Answer = $row[14]<br><br>";
		}
	}
	elseif(strcmp($theory,$type)==0)
	{
		$query = "SELECT * FROM theorypaper WHERE ID='$id'";
		$result = mysqli_query($con, $query);
		$count1 = 1;
		while($row = mysqli_fetch_array($result))
		{
			echo "Name Of Professor = $row[1]<br><br>";
			$query2 = "SELECT DOMAIN FROM domaintable WHERE ID='$row[2]'";
			$result2 = mysqli_query($con, $query2);
			while($row2 = mysqli_fetch_array($result2))
			{
				echo "Domain = $row2[0]<br><br>";
			}
			$query3 = "SELECT COURSE FROM domainsemcourse WHERE ID='$row[3]'";
			$result3 = mysqli_query($con, $query3);
			while($row3 = mysqli_fetch_array($result3))
			{
				echo "Course = $row3[0]<br><br>";
			}
			echo "Type = $row[4]<br><br>";
			$query4 = "SELECT * FROM theoryquest WHERE PAPERID='$row[0]'";
			$result4 = mysqli_query($con, $query4);
			while($row4 = mysqli_fetch_array($result4))
			{
				echo "Q$count1 : $row1[2] -- $row1[4]<br><br>";
				echo "A$count1 : $row1[3]<br><br>";
				$count1++;
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Activity</title>
	<script type="text/javascript" src="jquery-min.js"></script>
</head>
<body>
	<button id="rate">Rate</button><br><br>
	<div id="applyRating"></div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#rate").click(function(){
			var idOfAct = document.getElementById('idOfAct').value;
			document.getElementById("rate").disabled = true;
			$.ajax({
				success: function(data,status){
					var ratingTextbox = "<form action='ApplyActivityRating.php'>Rating(Out Of 5) : <input type='number' name='ratingVal'><br><br><input type='submit' value='Submit'><input type='hidden' name='activityID' value="+idOfAct+"></form>";
					$("#applyRating").html(ratingTextbox);
				},
				error: function(error){
					console.log(error);
				}
			})
		})
	})
</script>
</html>