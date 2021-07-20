<?php
	include 'MysqlConnectionCreated.php';
	session_start();
	$flag=0;
	$uname = $_REQUEST['uname'];
	$pass = $_REQUEST['pass'];
	// echo "$uname";
	// echo "$pass";
	$nameOfUser = "";
	$query = "SELECT USERNAME,PASSWORD,FIRST_NAME FROM userdetails";
	$getData = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($getData))
	{
		// echo "$row[0] <br>";
		// echo "$row[1] <br>";
		// echo "$row[2] <br>";
		if(strcmp($uname,$row[0])==0 && strcmp($pass,$row[1])==0)
		{
			$flag = $flag + 1;
			$nameOfUser = $row[2];
			// echo "$nameOfUser <br>";
		}
	}
	// echo "$nameOfUser <br>";
	if($flag==1)
	{

		$_SESSION['username'] = $nameOfUser;
		$_SESSION['userID'] = $uname;
		header('Location: Dashboard.php');
	}
	else
	{
		echo"Wrong username or password";
		header('Location:LoginPage.html');
	}
?>