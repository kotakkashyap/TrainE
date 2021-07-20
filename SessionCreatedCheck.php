<?php
	include 'MysqlConnectionCreated.php';
	session_start();
	$getSessionUname = $_SESSION['username'];
	if ($getSessionUname)
	{
		#echo "Welcome $getSessionUname;
		ini_set("display_errors", 0);
		$getData1 = mysqli_query($con,"SELECT TYPE FROM user WHERE USERNAME='$getSessionUname'");
		if ($row = mysqli_fetch_array($getData1))
		{
			if (strcmp($row[0], $admin)==0)
			{
				$userVar++;
			}
			else
			{
				$userVar = 0;
			}
		}
		// return $userVar;
	}
	else
	{
		echo "Kindly login and then enter!!";
		header('Location: LoginPage.html');
	}
?>