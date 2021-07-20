<?php
	header("Content-Type: application/json");
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';
	$inputSearch = $_REQUEST['searchIn'];
	$thisUser = $_SESSION['userID'];
	// echo "$thisUser";
	$json = array();
	$query1 = "SELECT * FROM piactivity WHERE DOMAIN LIKE '$inputSearch%' OR COURSE LIKE '$inputSearch%' OR TOPIC LIKE '$inputSearch%' OR NAME_OF_PROFESSOR LIKE '$inputSearch%'";
	// echo "$query";
	$result1 = mysqli_query($con, $query1);
	while($row = mysqli_fetch_array($result1))
	{
		if(strcasecmp($thisUser,$row[1]) != 0)
		{
			$idret = $row[0];
			$nameret = $row[1];
			$domain = $row[2];
			$domainret = null;
			$query4 = "SELECT DOMAIN FROM domaintable WHERE ID='$domain'";
			$result4 = mysqli_query($con, $query4);
			while($row = mysqli_fetch_array($result4))
			{
				$domainret = $row[0];
			}
			$course = $row[3];
			$courseret = null;
			$query5 = "SELECT COURSE FROM domainsemcourse WHERE ID='$domain'";
			$result5 = mysqli_query($con, $query5);
			while($row = mysqli_fetch_array($result5))
			{
				$courseret = $row[0];
			}
			$typeret = "PI";
			$data=array(
				'idRet' => $idret,
				'nameRet' => $nameret,
				'domainRet' => $domainret,
				'courseRet' => $courseret,
				'typeRet' => $typeret
			);
			array_push($json, $data);
		}
	}
	$query2 = "SELECT * FROM tpsactivity WHERE DOMAIN LIKE '$inputSearch%' OR COURSE LIKE '$inputSearch%' OR TOPIC LIKE '$inputSearch%' OR NAME_OF_PROFESSOR LIKE '$inputSearch%'";
	// echo "$query";
	$result2 = mysqli_query($con, $query2);
	while($row = mysqli_fetch_array($result2))
	{
		if(strcasecmp($thisUser,$row[1]) != 0)
		{
			$idret = $row[0];
			$nameret = $row[1];
			$domain = $row[2];
			$domainret = null;
			$query4 = "SELECT DOMAIN FROM domaintable WHERE ID='$domain'";
			$result4 = mysqli_query($con, $query4);
			while($row = mysqli_fetch_array($result4))
			{
				$domainret = $row[0];
			}
			$course = $row[3];
			$courseret = null;
			$query5 = "SELECT COURSE FROM domainsemcourse WHERE ID='$domain'";
			$result5 = mysqli_query($con, $query5);
			while($row = mysqli_fetch_array($result5))
			{
				$courseret = $row[0];
			}
			$typeret = "TPS";
			$data=array(
				'idRet' => $idret,
				'nameRet' => $nameret,
				'domainRet' => $domainret,
				'courseRet' => $courseret,
				'typeRet' => $typeret
			);
			array_push($json, $data);
		}
	}
	$query3 = "SELECT * FROM theorypaper WHERE DOMAIN LIKE '$inputSearch%'OR NAME_OF_PROFESSOR LIKE '$inputSearch%' OR DOMAIN LIKE '$inputSearch%' OR COURSE LIKE '$inputSearch%'";
	// echo "$query";
	$result3 = mysqli_query($con, $query3);
	while($row = mysqli_fetch_array($result3))
	{
		if(strcasecmp($thisUser,$row[1]) != 0)
		{
			$idret = $row[0];
			$nameret = $row[1];
			$domain = $row[2];
			$domainret = null;
			$query4 = "SELECT DOMAIN FROM domaintable WHERE ID='$domain'";
			$result4 = mysqli_query($con, $query4);
			while($row = mysqli_fetch_array($result4))
			{
				$domainret = $row[0];
			}
			$course = $row[3];
			$courseret = null;
			$query5 = "SELECT COURSE FROM domainsemcourse WHERE ID='$domain'";
			$result5 = mysqli_query($con, $query5);
			while($row = mysqli_fetch_array($result5))
			{
				$courseret = $row[0];
			}
			$typeret = "THEORY_PAPER";
			$data=array(
				'idRet' => $idret,
				'nameRet' => $nameret,
				'domainRet' => $domainret,
				'courseRet' => $courseret,
				'typeRet' => $typeret,
			);
			array_push($json, $data);
		}
	}
	echo json_encode($json);
?>