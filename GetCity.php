<?php
	header("Content-Type: application/json");
	include 'MysqlConnectionCreated.php';
	$json = array();
	$selectedState = $_REQUEST['selectedState'];
	$query = "SELECT CITY FROM statewisecity WHERE STATE='$selectedState'";
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result))
	{
		$cityret = $row[0];
		$data=array(
			'cityRet' => $cityret
		);
		array_push($json, $data);
	}
	echo json_encode($json);
?>