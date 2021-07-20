<?php
	header("Content-Type: application/json");
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';
	// include 'TempHeader.html';
	$courseInValue = $_REQUEST['CourseIn'];
	$json = array();
	$user = $_SESSION['userID'];
	$query = "SELECT CO FROM coursewiseco WHERE COURSE='$courseInValue'";
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result))
	{
		// echo "$row[0]";
		$COret = $row[0];
		$data=array(
				'CORet' => $COret
		);
		array_push($json, $data);
	}
	echo json_encode($json);
?>