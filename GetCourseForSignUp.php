<?php
	header("Content-Type: application/json");
	include 'MysqlConnectionCreated.php';
	$json = array();
	$selectedDomain = $_REQUEST['selectedDomain'];
	$query = "SELECT COURSE FROM domainsemcourse WHERE DOMAINID='$selectedDomain'";
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