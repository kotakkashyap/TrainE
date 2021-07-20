<?php
	header("Content-Type: application/json");
	// include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	// include 'Tempheader.html';
	$json = array();
	$domainVal = $_REQUEST['domainVal'];
	$query = "SELECT COURSE FROM domainsemcourse WHERE DOMAINID='$domainVal'";
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result))
	{
		$courseret = $row[0];
		$data = array(
			'courseRet' => $courseret
		);
		array_push($json, $data);
	}
	echo json_encode($json);
?>