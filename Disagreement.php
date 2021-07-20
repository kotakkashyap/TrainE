<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Diagreement Resolver</title>
</head>
<body>
	<form method="POST">
		<?php
			$reviewId = $_REQUEST['receivedIn'];
			$query = "SELECT GIVENBY FROM givenreviews WHERE ID='$reviewId'";
			$userIn = "";
			$result = mysqli_query($con, $query);
			while($row = mysqli_fetch_array($result))
			{
				$userIn = $row[0];
			}
		?>
		Who : <input type="text" name="who" disabled="true" value='<?php $userIn ?>'><br><br>
		What : <input type="text" name="what"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
	$message = "";
	if(isset($_POST['submit']))
	{
		$from = $_SESSION['userId'];
		$query1 = "SELECT FIRST_NAME FROM userdetails WHERE USERNAME='$from'";
		$result1 = mysqli_query($con, $query1);
		while($row1 = mysqli_fetch_array($result1))
		{
			$fromUser = $row[0];
		}
		$count = 1;
		$what = $_POST['what'];
		$message = $userIn.";".$what;
		$query2 = "INSERT INTO message (ID, FROMUSER, TOUSER, MESSAGE) VALUES('$count', '$fromUser', '$userIn', '$what')"; 
		if(mysqli_query($con, $query2))
		{
			echo "Row Inserted!!";
		}
		else
		{
			echo "Row Not Inserted!!";
		}
		// echo "Result:<input type='text' value='$sum'/>";			
	}
	// echo "<br><br>Message : $message";
	// ini_set("errors", 0);
?>