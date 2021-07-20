<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	include 'TempHeader.html';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery-min.js"></script>
	<title>Course Wise Marks</title>
</head>
<body>
	<select id="Semister" name="Semister">
			<option value="0">Choose Semister</option>
			<?php
				$query = "SELECT * FROM semister";
				$result = mysqli_query($con, $query);
				while($row = mysqli_fetch_array($result))
				{
					echo "<option value='$row[0]'>$row[1]</option>";
				}
			?>
	</select>
	<button id="ok">Next</button><br>
	<div id="anotherDropdown"></div><br>
	<div id="anotherButton"></div><br>
	<div id="marksTable"></div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#ok").click(function(){
			var count = 0;
			var flag = 0;
			var sem = document.getElementById("Semister").value;
			if(sem == 0)
			{
				flag++;
			}
			if(flag == 0)
			{
				$.ajax({
				 	url: 'http://localhost/Projects/final_year/GetCourse.php?SemisterIn='+sem,
				  	success: function(data, status){
				  		var anotherDropdown = "<br><select id='Course' name='Course'><option value='0'>Choose Course</option>";
				  		$.each(data, function(i){
				  			row = data[i];
				  			courseName = row.courseRet;
					  		anotherDropdown = anotherDropdown + "<option value="+ (++count) +">"+ courseName +"</option>";
					  	});
					  	anotherDropdown = anotherDropdown + "</select>";
					  	anotherButton = "<button id='ok2'>Next</button><br>";
					  	$('#anotherButton').html(anotherButton);
					  	$('#anotherDropdown').html(anotherDropdown);
				  	},
				  	error: function(error)
				  	{
				  		console.log(error);
				  	}
				});
			}
			else
			{
				// code...
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#anotherButton").click(function(){
			var count = 0;
			var flag = 0;
			var courseIn = document.getElementById("Course").value;
			console.log(courseIn);
			if(courseIn == 0)
			{
				flag++;
			}
			if(flag == 0)
			{
				$.ajax({
				 	url: 'http://localhost/Projects/final_year/GetCourseMarks.php?CourseIn='+courseIn,
				  	success: function(data, status){
				  		var marksTable = "<table border=5><th>ENROLLMENT NUMBER</th><th>COURSE</th><th>ASSIGNMENT1</th><th>ASSIGNMENT2</th><th>TEST</th><th>AVERAGE</th>";
				  		$.each(data, function(i){
				  			row = data[i];
				  			enroll = row.enroll;
				  			courseName = row.courseRet;
				  			assign1 = row.assign1Ret;
				  			assign2 = row.assign2Ret;
				  			test = row.testRet;
				  			avg = row.avgRet;
				  			marksTable = marksTable + "<tr><td>"+enroll+"</td><td>"+courseName+"</td><td>"+assign1+"</td><td>"+assign2+"</td><td>"+test+"</td><td>"+avg+"</td>";
					  	});
					  	marksTable = marksTable + "</table>";
					  	$('#marksTable').html(marksTable);
				  	},
				  	error: function(error)
				  	{
				  		console.log(error);
				  	}
				});
			}
			else
			{
				// code...
			}
		});
	});
</script>
</html>