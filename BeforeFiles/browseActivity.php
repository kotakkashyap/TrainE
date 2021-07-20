<?php
	include 'MysqlConnectionCreated.php';
	include 'SessionCreatedCheck.php';
	include 'TempHeader.html';
?>
<!DOCTYPE html>
<html>
<head>
	<script src="jquery-min.js"></script>
	<title>Browse Activity</title>
</head>
<body>
	Search : <input type="text" name="search" id="search"><br><br>
	<div id="activityTable"></div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search").keyup(function(){
			var count = 0;
			var flag = 0;
			var searchIn = document.getElementById("search").value;
			console.log(searchIn);
			if(searchIn == 0)
			{
				flag++;
			}
			if(flag == 0)
			{
				$.ajax({
				 	url: 'http://localhost/Projects/final_year/GetActivity.php?searchIn='+searchIn,
				  	success: function(data, status){
				  		var activityTable = "<table border=5><th>ACTIVITY ID</th><th>TYPE</th><th>DOMAIN</th><th>COURSE</th><th>NAME OF PROFESSOR</th><th>VIEW</th>";
				  		$.each(data, function(i){
				  			row = data[i];
				  			idRet = row.idRet;
				  			nameRet = row.nameRet;
				  			domainRet = row.domainRet;
				  			courseRet = row.courseRet;
				  			typeRet = row.typeRet;
				  			activityTable = activityTable + "<tr><td>"+idRet+"</td><td>"+typeRet+"</td><td>"+domainRet+"</td><td>"+courseRet+"</td><td>"+nameRet+"</td><td><a href='ViewActivity.php?activityID="+idRet+"&activityType="+typeRet+"'>View</button>";
					  	});
					  	activityTable = activityTable + "</table>";
					  	$('#activityTable').html(activityTable);
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