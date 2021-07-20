<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	include 'TempHeader.html';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PI Activity Creation</title>
</head>
<body>
	<form action="PIActCreateAction.php" method="POST" align="center">
		Choose topic from course : <select name="topicFromCourse" id="topicFromCourse">
			<option value="0">Choose Topic</option>
			<?php
				$nameOfCoursetaught = "";
				$IDOfCoursetaught = 0;
				$uname = $_SESSION['userID'];
				// echo "$uname";
				$query = "SELECT COURSES_TAUGHT FROM userdetails WHERE USERNAME='$uname'";
				// echo "$query";
				$result = mysqli_query($con, $query);
				while($row = mysqli_fetch_array($result))
				{
					$nameOfCoursetaught = $row[0];
					// echo "$IDOfCoursetaught";
				}
				// echo "$IDOfCoursetaught";
				$query2 = "SELECT COURSE FROM domainwisecourse WHERE COURSE='$nameOfCoursetaught'";
				// echo "$query2";
				$result2 = mysqli_query($con, $query2);
				while($row2 = mysqli_fetch_array($result2))
				{
					$nameOfCoursetaught = $row2[0];
					// echo "$nameOfCoursetaught";
				}
				$query3 = "SELECT * FROM coursewisetopic WHERE COURSE='$nameOfCoursetaught'";
				$result3 = mysqli_query($con, $query3);
				while($row3 = mysqli_fetch_array($result3))
				{
					$id = $row3[0];
					$name = $row3[2];
					$i++;
					echo "<option id=$id value=$id> $name </option>";
				}
			?>
		</select><br><br>
		Concept Being Address : <input type="text" name="conceptAddr" id="conceptAddr"><br><br>
		Concept Test Question : <input type="text" name="conceptQuest" id="conceptQuest"><br><br>
		Correct Answer : <input type="text" name="correctAns" id="correctAns"><br><br>
		Plausible Distractor : <input type="text" name="plausibleDistractor" id="plausibleDistrator"><br><br>
		<input type="Submit" name="Submit">
	</form>
</body>
</html>