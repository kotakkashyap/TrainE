<?php
	header("Content-Type: application/json");
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';
	// include 'TempHeader.html';
	$json = array();
	$topicIDGet = $_REQUEST['TopicIn'];
	$query = "SELECT TOPIC FROM coursewisetopic WHERE ID='$topicIDGet'";
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result))
	{
		$TopicNameRet = $row[0];
		$data=array(
			'topicNameRet' => $TopicNameRet
		);
		array_push($json, $data);
	}
	echo json_encode($json);
?>