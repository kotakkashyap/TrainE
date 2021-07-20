<?php
	include 'TempHeader.html';
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery-min.js"></script>
	<title>Co-Attainment</title>
</head>
<body>
	<!-- <form align="center"> -->
		Course : <select id="courseSelect" name="courseSelect">
			<option value="0">Choose Course</option>
			<?php
				$user = $_SESSION['userID'];
				$query1 = "SELECT DOMAIN FROM userdetails WHERE USERNAME = '$user'";
				$result = mysqli_query($con, $query1);
				while($row = mysqli_fetch_array($result))
				{
					$domainID = $row[0];
				}
				$query = "SELECT ID, COURSE FROM domainsemcourse WHERE DOMAINID='$domainID'";
				$getData = mysqli_query($con, $query);
				while($row = mysqli_fetch_array($getData))
				{
					$id = $row[0];
					$name = $row[1];
					$i++;
					echo "<option id=$id value=$id> $name </option>";
				}
			?>
		</select>
		<button id="next" name="next">Next</button>
		<div id="anotherDropdown"></div><br>
		<div id="anotherButton"></div>
		<div id="htmlCode"></div>
	<!-- </form> -->
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#next").click(function(){
			var courseIn = document.getElementById("courseSelect").value;
			console.log(courseIn);
			var count = 0;
			$.ajax({
			 	url: 'http://localhost/Projects/final_year/GetCO.php?CourseIn='+courseIn,
			  	success: function(data, status){
			  		var anotherDropdown = "<br><select id='CO' name='CO'><option value='0'>Choose CO</option>";
			  		$.each(data, function(i){
			  			row = data[i];
			  			COName = row.CORet;
				  		anotherDropdown = anotherDropdown + "<option value="+ (++count) +">"+ COName +"</option>";
				  	});
				  	anotherDropdown = anotherDropdown + "</select>";
				  	anotherButton = "<button id='next2'>Next</button><br>";
				  	$('#anotherButton').html(anotherButton);
				  	$('#anotherDropdown').html(anotherDropdown);
			  	},
			  	error: function(error)
			  	{
			  		console.log(error);
			  	}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#anotherButton").click(function(){
			var COIn = document.getElementById("anotherDropdown").value;
			var count = 0;
			$.ajax({
			  	success: function(data, status){
			  		var htmlCode = "<form action='CalculateCo.php' method='post'><br>Number Of Questions Of This CO : <input type='text' name='noOfQuest' id='noOfQuest'><br><br>Number Of Students Attempted Questions Of this CO : <input type='text' name='noOfStudAttempt' id='noOfStudAttempt'><br><br><input type='Submit' name='Submit'></form>'";
				  	$('#htmlCode').html(htmlCode);
			  	},
			  	error: function(error)
			  	{
			  		console.log(error);
			  	}
			});
		});
	});
</script>
</html>