<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	$idOfAct = $_REQUEST['activityID'];
	$rating = $_REQUEST['ratingVal'];
	echo "$idOfAct";
	echo "$rating";
?>