<?php
	include 'MysqlConnectionCreated.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery-min.js"></script>
	<title>Sign Up/New User</title>
</head>
<body>
	<form action="AddToUserDetails.php" method="post">
		Username : <input type="text" name="uname" id="uname"><br><br>
		Password : <input type="password" name="pass" id="pass"><br><br>
		First Name : <input type="text" name="fname" id="fname"><br><br>
		Middle Name : <input type="text" name="mname" id="mname"><br><br>
		Last Name : <input type="text" name="lname" id="lname"><br><br>
		College : <select id="college" name="college">
			<option value="0">Choose College</option>
			<?php
				$query3 = "SELECT * FROM collegetable";
				$result3 = mysqli_query($con, $query3);
				while($row = mysqli_fetch_array($result3))
				{
					$id = $row[0];
					$name = $row[1];
					$i++;
					echo "<option id=$id value=$id> $row[1] </option>";
				}
			?>
		</select><br><br>
		Experience : <select id="experience" name="experience">
			<option value="0">Choose Experience</option>
			<?php
				$query1 = "SELECT * FROM experiencetable";
				$result1 = mysqli_query($con, $query1);
				while($row = mysqli_fetch_array($result1))
				{
					$id = $row[0];
					$name = $row[1];
					$i++;
					echo "<option id=$id value=$id> $row[1] </option>";
				}
			?>
		</select><br><br>
		Domain : <select id="domain" name="domain">
			<option value="0">Choose Domain</option>
			<?php
				$query2 = "SELECT * FROM domaintable";
				$result2 = mysqli_query($con, $query2);
				while($row = mysqli_fetch_array($result2))
				{
					$id = $row[0];
					$name = $row[1];
					$i++;
					echo "<option id=$id value=$id> $row[1] </option>";
				}
			?>
		</select><br><br>
		<div id="htmlCode"></div>
		<input type="submit" name="submit">
	</form>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#domain").change(function(){
			// console.log("inside jquery!!");
			var domainValue = document.getElementById("domain").value;
			var count = 1;
			$.ajax({
				url: "http://localhost/Projects/final_year/GetCourseFromDomain.php?domainVal="+domainValue+"",
				success: function(data, status){
					var htmlCode = "Course : <select id='courseSelect' name='courseSelect'><option value='0'>Choose Course</option>";
					$.each(data,function(i){
						row = data[i];
						courseList = row.courseRet;
						console.log(courseList);
						htmlCode = htmlCode + "<option id="+count+" value="+count+">"+courseList+"</option>";
						count++;
					});
					htmlCode = htmlCode + "</select><br><br>Contact Number : <input type='number' name='contact' id='contact'><br><br>Email : <input type='text' name='mailId' id='mailId'><br><br>";
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