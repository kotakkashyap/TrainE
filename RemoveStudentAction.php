<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	$studentId = $_REQUEST['StudentId'];
	$enroll = $_REQUEST['enroll'];
	$query = "DELETE FROM student WHERE ID='$studentId' AND ENROLLMENT_NUMBER=$enroll";
	if ($con)
	{
		$getData1 = mysqli_query($con,"SELECT * FROM student");
		while ($row = mysqli_fetch_array($getData1))
		{
			$count++;
		}
		$i = $studentId;
		$j = $studentId;
		#echo "$count";
		$getData = mysqli_query($con,$query);
		if ($getData)
		{
			while ($j <= $count)
			{
				$query1 = "UPDATE student SET ID = $i where ID = $i+1";
				mysqli_query($con,$query1);
				$j++;
				$i++;
			}
			echo "student deleted successfully!!";
			header("location:ListOfStudents.php");
		}
	}
	else
	{
		header("location:ListOfStudents.php");
		echo "Some error occurred please try again after sometime!!";
	}
?>