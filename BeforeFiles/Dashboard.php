<?php
	include 'SessionCreatedCheck.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<button id="createAct" onclick="location.href='CreateAct.php'">Create Activity</button>
	<button id="my" onclick="location.href='myActivities.php'">My Activities</button>
	<button id="received" onclick="location.href='ReceivedReviews.php'">Received Reviews</button>
	<button id="given" onclick="location.href='GivenReviews.php'">Given Reviews</button>
	<button id="disageeResolve" onclick="location.href='Disagreement.php'">Disagreement Resolver</button>
	<button id="student" onclick="location.href='StudentSection.php'">Student Section</button>
	<!-- <button id="setting" onclick="location.href='Settings.php'">Settings</button> -->
	<!-- <button id="qas" onclick="location.href='QAs.php'">Question And Answers</button> -->
	<button id="activity" onclick="location.href='browseActivity.php'">Browse Activity</button>
	<button id="logOut" onclick="location.href='logout.php'">LogOut</button>
</body>
</html>