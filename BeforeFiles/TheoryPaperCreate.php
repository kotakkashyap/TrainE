<?php
	include 'SessionCreatedCheck.php';
	include 'TempHeader.html';
	include 'MysqlConnectionCreated.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery-min.js"></script>
	<title>Theory Paper</title>
</head>
<body>
	Number Of Questions : <input type="number" name="noOfQuest" id="noOfQuest"><br><br>
	<button id="nextStep">NEXT</button><br><br>
	<div id="htmlCode"></div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#nextStep").keyup(function(){
			var count = 0;
			var count1 = 1;
			var flag = 0;
			var noOfQuest = document.getElementById("noOfQuest").value;
			if(noOfQuest == 0)
			{
				flag++;
			}
			if(flag == 0)
			{
				$.ajax({
				  	success: function(data, status){
				  		var htmlCode = "<form action='ShowTheoryPaper.php'><input type='hidden' name='noOfQuests' value="+noOfQuest+">";
				  		while(count<noOfQuest)
				  		{
				  			htmlCode = htmlCode + "Q"+count1+" : <input type='text' name='quest[]'> -- <input type='number' name='marksForQuestion[]'><br><br>A"+count1+" : <input type='text' name='ans[]'><br><br>";
				  			count++;
				  			count1++
				  		}
					  	htmlCode = htmlCode + "<input type='submit' value='SUBMIT'></form>";
					  	$('#htmlCode').html(htmlCode);
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