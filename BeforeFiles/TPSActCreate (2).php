<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Create TPS Activity</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="AdminLTE.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="skin-yellow-light.css">
        <link rel="stylesheet" href="ionicons.min.css">
        <link rel="stylesheet" href="materialize.min.css">
        <link rel="stylesheet" href="PI-activity-create.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition skin-yellow-light sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">TE</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>TrainE</b></span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->  
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="avatar.png" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <?php
                                    	$user = $_SESSION['userID'];
                                    	$name = "";
                                        error_reporting(0);
                                        $getName = mysqli_query($con,"SELECT FIRST_NAME, LAST_NAME FROM userdetails WHERE USERNAME='$user'");
                                        while($row = mysqli_fetch_array($getName))
                                        {
	                                        $name = $row['FIRST_NAME']." ".$row['LAST_NAME'];
                                        }
                                    ?>
                                    <span class="hidden-xs">
                                    	<?php
	                                    	echo "$name";
                                    	?>
                                	</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="avatar.png" class="img-circle" alt="User Image">
                                        <p>
                                            <?php
                                            	echo "$name";
                                            ?>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="avatar.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>
                                <?php
	                                echo "$name";
                                ?>
                            </p>
                        <!-- Status -->
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <!-- Optionally, you can add icons to the links -->
                        <li>
                            <a href="Dashboard.php">
                                <i class="fa fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <!-- code -->
                        </li>    
                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
            <!-- Content Header (Page header) -->    
            <!-- Main content -->
            <div class="container">
                <!--<h3> Create PI Activity</h3>-->
                <!-- <form action=""> -->
                    <h3> TPS Activity</h3>
                    <div class="activity">
                        <div class="row">
                            <h4> Think Phase <i class="count"></i></h4> 
                        </div> 
                        <div class="row">
                            <label for="topic">Choose Topic For Course:</label>
                            <select name="topicFromCourse" id="topicFromCourse" class="browser-default inline-block">
                                <?php
                                	$courseId = 0;
                                	$query = "SELECT COURSES_TAUGHT FROM userdetails WHERE USERNAME = '$user'";
                                	$result = mysqli_query($con, $query);
                                	while($row = mysqli_fetch_array($result))
                                	{
                                		$courseId = $row[0];
                                		// echo "$courseId";
                                	}
                                	$query2 = "SELECT ID,TOPIC FROM coursewisetopic WHERE COURSE='$courseId'";
                                	$result2 = mysqli_query($con, $query2);
                                	while($row = mysqli_fetch_array($result2))
                                	{
                                		echo "<option value='$row[0]'> $row[1] </option>";
                                	}
                                ?>
                            </select>
                        </div>
                        <div class="row">
                            <label for="duration1">Duration:</label>
                            <input type="text" name="duration1" id="duration1" class="browser-default">
                        </div>
                        <div class="row">
                            <label for="guideQuest1">Question:</label>
                            <input type="text" id="guideQuest1" name="guideQuest1" class="browser-default">
                        </div>   
                        <div class="row">
                            <label for="desireOutput1">Answer:</label>
                            <input type="text" name="desireOutput1" id="desireOutput1" class="browser-default">
                        </div>      
                        <div class="row" id="nextPhase">
                            <button id="nextPhaseButton1"> Next </button>
                        </div>
                        <div class="row">
                            <div id="htmlCodeForPhase2"></div>
                        </div>
                        <div class="row">
                            <div id="nextPhaseButton"></div>
                        </div>
                        <div class="row">
                            <div id="htmlCodeForPhase3"></div>
                        </div>
                        <div class="row">
                            <div id="nextPageButton"></div>
                        </div>
                        <div class="row">
                            <div id="htmlCodeForNextPage"></div>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
            <script src="jquery-min.js"></script>
            <script type="text/javascript">
				$(document).ready(function(){
					$("#nextPhaseButton1").click(function(){
						// console.log("CLicked!!");
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
						  		var htmlCodeForPhase2 = "PAIR PHASE<br><br>"+topicNameRet+"<br><div class='row'><label for='concept'>Duration:</label><input type='text' name='duration2' id='duration2' class='browser-default'></div><div class='row'><label for='concept-test-question'>Question:</label><input type='text' name='guideQuest2' id='guideQuest2' class='browser-default'></div><div class='row'><label for='correct-answer'>Answer:</label><input type='text' name='desireOutput2' id='desireOutput2' class='browser-default'></div><br><br><input type=hidden id='topicFromCourse' name='topicFromCourse' value='"+topicFromCourse+"'><script type='text/javascript'>$(document).ready(function(){$('#nextPhase2').click(function(){var topicFromCourse = document.getElementById('topicFromCourse').value;var duration2 = document.getElementById('duration2').value;var guideQuest2 = document.getElementById('guideQuest2').value;var out2 = document.getElementById('desireOutput2').value;var topicNameRet = '';$.ajax({url: 'http://localhost/Projects/final_year/GetTopicName.php?TopicIn='+topicFromCourse,success: function(data, status){$.each(data, function(i){row = data[i];topicNameRet = row.topicNameRet;});var htmlCodeForPhase3 = '<br>SHARE PHASE<br><br>'+topicNameRet+'<br><br>Duration : <div class=\"row\"><label for=\"concept\">Duration:</label><input type=\"text\" name=\"duration3\" id=\"duration3\" class=\"browser-default\"></div><div class=\"row\"><label for=\"concept-test-question\">Question:</label><input type=\"text\" name=\"guideQuest3\" id=\"guideQuest3\" class=\"browser-default\"></div><div class=\"row\"><label for=\"correct-answer\">Answer:</label><input type=\"text\" name=\"desireOutput3\" id=\"desireOutput3\" class=\"browser-default\"></div><br><br>';var nextPageButton='<button id=\"nextPage\">OK</button>';$(\"#nextPageButton\").html(nextPageButton);$(\"#htmlCodeForPhase3\").html(htmlCodeForPhase3);},error: function(error){console.log(error);}});});});<\/script>";
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
						console.log("Clicked Page Button!!!");
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
            <!-- /.content-wrapper -->
            <!-- Main Footer -->  
            <!-- Control Sidebar -->
            <!-- Tab panes -->
            <!-- REQUIRED JS SCRIPTS -->
            <!-- jQuery 2.1.4 -->
            <!-- Bootstrap 3.3.5 -->
            <script src="bootstrap.min.js"></script>
            <!-- AdminLTE App -->
            <script src="app.min.js"></script>
            <!-- Optionally, you can add Slimscroll and FastClick plugins.
                 Both of these plugins are recommended to enhance the
                 user experience. Slimscroll is required when using the
                 fixed layout. -->
            </div>
        </div>
    </body>
</html>