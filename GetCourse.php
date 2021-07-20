<?php
	header("Content-Type: application/json");
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';
	include 'TempHeader.php';
	$sem = $_REQUEST['SemisterIn'];
	$json = array();
	$domainID = null;
	$user = $_SESSION['userID'];
	$query1 = "SELECT DOMAIN FROM userdetails WHERE USERNAME='$user'";
	$result1 = mysqli_query($con, $query1);
	while($row = mysqli_fetch_array($result1))
	{
		$domainID = $row[0];
	}
	$query = "SELECT COURSE FROM domainsemcourse WHERE SEMID = '$sem' AND DOMAINID='$domainID'";
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result))
	{
		$courseret = $row[0];
		$data=array(
				'courseRet' => $courseret
		);
		array_push($json, $data);
	}
	echo json_encode($json);
?>