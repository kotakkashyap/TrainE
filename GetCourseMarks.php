<?php
	header("Content-Type: application/json");
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';
	include 'TempHeader.php';
	$courseIn = $_REQUEST['CourseIn'];
	$json = array();
	// echo "$courseIn";
	$query = "SELECT * FROM coursewisemarks WHERE COURSE = '$courseIn'";
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result))
	{
		$enroll = $row[1];
		$enrollret = "";
		$query1 = "SELECT ENROLLNO FROM listofstudents WHERE ID='$enroll'";
		$result1 = mysqli_query($con, $query1);
		while($row1 = mysqli_fetch_array($result1))
		{
			$enrollret = $row1[0];
		}
		$course = $row[3];
		$courseret = "";
		$query2 = "SELECT COURSE FROM domainsemcourse WHERE ID='$course'";
		$result2 = mysqli_query($con, $query2);
		while($row2 = mysqli_fetch_array($result2))
		{
			$courseret = $row2[0];
		}
		$sem = $row[2];
		$semret = "";
		$query3 = "SELECT SEM FROM semister WHERE ID='$sem'";
		$result3 = mysqli_query($con, $query3);
		while($row3 = mysqli_fetch_array($result3))
		{
			$semret = $row3[0];
		}
		$assign_1 = $row[4];
		$assign_2 = $row[5];
		$test = $row[6];
		$avg = $row[7];
		$data=array(
			'enroll' => $enrollret,
			'courseRet' => $courseret,
			'semRet' => $semret,
			'assign1Ret' => $assign_1,
			'assign2Ret' => $assign_2,
			'testRet' => $test,
			'avgRet' => $avg
		);
		array_push($json, $data);
	}
	echo json_encode($json);
?>