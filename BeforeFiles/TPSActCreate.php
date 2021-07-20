<?php
	include 'SessionCreatedCheck.php';
	include 'TempHeader.html';
	include 'MysqlConnectionCreated.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery-min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
	<title>TPS Activity Creation</title>
</head>
<body>
	THINK PHASE<br><br>
	Choose topic from course : <select name="topicFromCourse" id="topicFromCourse">
			<option value="0">Choose Topic</option>
			<?php
				$IDOfCoursetaught = 0;
				$uname = $_SESSION['userID'];
				// echo "$uname<br>";
				$query = "SELECT COURSES_TAUGHT FROM userdetails WHERE USERNAME='$uname'";
				// echo "$query<br>";
				$result = mysqli_query($con, $query);
				while($row = mysqli_fetch_array($result))
				{
					$IDOfCoursetaught = $row[0];
					// echo "$IDOfCoursetaught<br>";
				}
				// echo "$IDOfCoursetaught<br>";
				$query1 = "SELECT * FROM coursewisetopic WHERE COURSE='$IDOfCoursetaught'";
				$result1 = mysqli_query($con, $query1);
				while($row1 = mysqli_fetch_array($result1))
				{
					$id = $row1[0];
					$name = $row1[2];
					$i++;
					// echo "$name";
					echo "<option id=$id value=$id> $name </option>";
				}
			?>
		</select><br><br>
		Duration : <input type="number" name="duration1" id="duration1"><br><br>
		Guiding Question : <input type="text" name="guideQuest1" id="guideQuest1"><br><br>
		Desired Output : <input type="text" name="desireOutput1" id="desireOutput1"><br><br>
		<button id="nextPhase">Next</button><br><br>
		<div id="htmlCodeForPhase2"></div>
		<div id="nextPhaseButton"></div>
		<div id="htmlCodeForPhase3"></div>
		<div id="nextPageButton"></div>
		<div id="htmlCodeForNextPage"></div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#nextPhase").click(function(){
			var topicFromCourse = document.getElementById("topicFromCourse").value;
			var duration = document.getElementById("duration1").value;
			var guideQuest = document.getElementById("guideQuest1").value;
			var out = document.getElementById("desireOutput1").value;
			var topicNameRet = "";
			// var count = 0;
			$.ajax({
				url: 'http://localhost/Projects/final_year/GetTopicName.php?TopicIn='+topicFromCourse,
			  	success: function(data, status){
			  		$.each(data, function(i){
			  			row = data[i];
			  			topicNameRet = row.topicNameRet;
				  	});
			  		var htmlCodeForPhase2 = "PAIR PHASE<br><br>"+topicNameRet+"<br><br>Duration : <input type='number' name='duration2' id='duration2'><br><br>Guiding Question : <input type='text' name='guideQuest2' id='guideQuest2'><br><br>Desired Output : <input type='text' name='desireOutput2' id='desireOutput2'><br><br><input type=hidden id='topicFromCourse' name='topicFromCourse' value='"+topicFromCourse+"'><script type='text/javascript'>$(document).ready(function(){$('#nextPhase2').click(function(){var topicFromCourse = document.getElementById('topicFromCourse').value;var duration2 = document.getElementById('duration2').value;var guideQuest2 = document.getElementById('guideQuest2').value;var out2 = document.getElementById('desireOutput2').value;var topicNameRet = '';$.ajax({url: 'http://localhost/Projects/final_year/GetTopicName.php?TopicIn='+topicFromCourse,success: function(data, status){$.each(data, function(i){row = data[i];topicNameRet = row.topicNameRet;});var htmlCodeForPhase3 = '<br>SHARE PHASE<br><br>'+topicNameRet+'<br><br>Duration : <input type=\"number\" name=\"duration3\" id=\"duration3\"><br><br>Guiding Question : <input type=\"text\" name=\"guideQuest3\" id=\"guideQuest3\"><br><br>Desired Output : <input type=\"text\" name=\"desireOutput3\" id=\"desireOutput3\"><br><br>';var nextPageButton='<button id=\"nextPage\">OK</button>';$(\"#nextPageButton\").html(nextPageButton);$(\"#htmlCodeForPhase3\").html(htmlCodeForPhase3);},error: function(error){console.log(error);}});});});<\/script>";
			  		var nextPhaseButton = "<button id='nextPhase2'>Next</button>";
			  		$('#nextPhaseButton').html(nextPhaseButton);
				  	$('#htmlCodeForPhase2').html(htmlCodeForPhase2);
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
		$("#nextPageButton").click(function(){
			console.log("Clicked!!!");
			var topicFromCourse = document.getElementById("topicFromCourse").value;
			var duration1 = document.getElementById("duration1").value;
			var duration2 = document.getElementById("duration2").value;
			var duration3 = document.getElementById("duration3").value;
			var quest1 = document.getElementById("guideQuest1").value;
			var quest2 = document.getElementById("guideQuest2").value;
			var quest3 = document.getElementById("guideQuest3").value;
			var ans1 = document.getElementById("desireOutput1").value;
			var ans2 = document.getElementById("desireOutput2").value;
			var ans3 = document.getElementById("desireOutput3").value;
			console.log(topicFromCourse);
			$.ajax({
				url: "",
				success: function(data, status){
					var htmlCodeForNextPage = "<form action='TPSActCreateAction.php' method='post'><input type='hidden' name='topicFromCourse' id='topicFromCourse' value="+topicFromCourse+"><input type='hidden' name='duration1' id='duration1' value="+duration1+"><input type='hidden' name='duration2' id='duration2' value="+duration2+"><input type='hidden' name='duration3' id='duration3' value="+duration3+"><input type='hidden' name='guideQuest1' id='guideQuest1' value="+quest1+"><input type='hidden' name='guideQuest2' id='guideQuest2' value="+quest2+"><input type='hidden' name='guideQuest3' id='guideQuest3' value="+quest3+"><input type='hidden' name='desireOutput1' id='desireOutput1' value="+ans1+"><input type='hidden' name='desireOutput2' id='desireOutput2' value="+ans2+"><input type='hidden' name='desireOutput3' id='desireOutput3' value="+ans3+"><input type='submit' name='submit' value='SUBMIT'></form>";
					$('#htmlCodeForNextPage').html(htmlCodeForNextPage);
					// $('#nextPhaseButton').html(nextPhaseButton);
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