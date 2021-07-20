// $_SESSION['username'] = $uname;
					
					// header('Location: UserDashboard.php');
					// header('Location:LoginPage.html');
					// echo'Wrong username or password";


					if(mysqli_query($con,$query))
	{
		echo "Student deleted Successfully!!";
		$query2 = "SELECT ID FROM student";
		$result2 = mysqli_query($con,$query2);
		while($row = mysqli_fetch_array($result))
		{
			$query3 = "UPDATE student SET ID = $row[0] WHERE ID = ($row[0]+1)";
		}
		// $result = mysqli_query($con,$query2);
		header("location:ListOfStudents.php");
	}
	else
	{
		echo "Student delete unsuccessful!!";
	}

//echo "$uname";$query = "SELECT COURSES_TAUGHT FROM userdetails WHERE USERNAME='$uname'";// echo "$query";
					// echo "$IDOfCoursetaught";
					// echo "$IDOfCoursetaught";
					// echo "$query2";
					// echo "$nameOfCoursetaught";

					// var count = 0;


--------------------------------------------------------------------------------------------------------------


"Phase 2<br><br>Duration : <input type='number' name='duration' id='duration'><br><br>Guiding Question : <input type='text' name='guideQuest' id='guideQuest'><br><br>Desired Output : <input type='text' name='desireOutput' id='desireOutput'><br><br><button id='nextPhase'>Next</button>"


--------------------------------------------------------------------------------------------------------------

<script type='text/javascript'>$(document).ready(function(){$('#nextPhase2').click(function(){var topicFromCourse = document.getElementById('topicFromCourse').value;var duration2 = document.getElementById('duration2').value;var guideQuest2 = document.getElementById('guideQuest2').value;var out2 = document.getElementById('desireOutput2').value;var topicNameRet = '';$.ajax({url: 'http://localhost/Projects/final_year/GetTopicName.php?TopicIn='+topicFromCourse,success: function(data, status){$.each(data, function(i){row = data[i];topicNameRet = row.topicNameRet;});var htmlCodeForPhase3 = 'Phase 3<br><br>'+topicNameRet+'<br><br>Duration : <input type='number' name='duration' id='duration'><br><br>Guiding Question : <input type='text' name='guideQuest' id='guideQuest'><br><br>Desired Output : <input type='text' name='desireOutput' id='desireOutput'><br><br><button id='nextPhase'>Next</button>';console.log(htmlCodeForPhase3);$('#htmlCodeForPhase3').html(htmlCodeForPhase3);},error: function(error){console.log(error);}});});});</script>


console.log(htmlCodeForPhase3);

onclick=\"location.href=\'TPSActCreateAction.php\'\"


<input type='hidden' name='duration1' id='duration1' value="+duration1+"><input type='hidden' name='duration2' id='duration2' value="+duration2+"><input type='hidden' name='duration3' id='duration3' value="+duration3+"><input type='hidden' name='guideQuest1' id='guideQuest1' value="+guideQuest1+"><input type='hidden' name='guideQuest2' id='guideQuest2' value="+guideQuest3+"><input type='hidden' name='guideQuest3' id='guideQuest3' value="+guideQuest3+"><input type='hidden' name='desireOutput1' id='desireOutput1' value="+desireOutput1+"><input type='hidden' name='desireOutput2' id='desireOutput2' value="+desireOutput2+"><input type='hidden' name='desireOutput3' id='desireOutput3' value="+desireOutput3+">






Courses Taught : <select id="courseTaught" name="courseTaught">
			<option value="0">Choose Course</option>
			<?php
				$query3 = "SELECT ID,COURSE FROM domainsemcourse";
				$result3 = mysqli_query($con, $query3);
				while($row = mysqli_fetch_array($result3))
				{
					$id = $row[0];
					$name = $row[3];
					$i++;
					echo "<option id=$id value=$id> $row[1] </option>";
				}
			?>
		</select><br><br>
		Contact Number : <input type="number" name="contact" id="contact"><br><br>
		Email : <input type="text" name="mailId" id="mailId"><br><br>



		Contact Number : <input type='number' name='contact' id='contact'><br><br>Email : <input type='text' name='mailId' id='mailId'><br><br>


		// while($count < $noOfQuests)
	// {
	// 	echo "Q$count1 : $quest[$count] -- $marks[$count]<br><br>";
	// 	echo "A$count1 : $ans[$count]<br><br>";
	// 	$count++;
	// 	$count1++;
	// }

	// echo "$noOfQuests<br>";
	// echo "$quest[1]";



	<?php
			$total=0;
				$count=mysqli_query($con,"SELECT COUNT(ScoreId) FROM TPSScores WHERE ReviewerId='$userId'");
				while($c=mysqli_fetch_array($count))
				{
					$c1=$c['COUNT(ScoreId)'];
				}
				
				$count1=mysqli_query($con,"SELECT COUNT(ScoreId) FROM PIScores WHERE ReviewerId='$userId'");
				while($co=mysqli_fetch_array($count1))
				{
					$c2=$co['COUNT(ScoreId)'];
				}
				
				$total=$c1+$c2;
				echo "<h3>$total</h3>";
			?>

			<?php
			$total=0;
				$count=mysqli_query($con,"SELECT COUNT(ScoreId) FROM TPSScores WHERE UserId='$userId'");
				while($c=mysqli_fetch_array($count))
				{
					$c1=$c['COUNT(ScoreId)'];
				}
				
				$count1=mysqli_query($con,"SELECT COUNT(ScoreId) FROM PIScores WHERE UserId='$userId'");
				while($co=mysqli_fetch_array($count1))
				{
					$c2=$co['COUNT(ScoreId)'];
				}
				
				$total=$c1+$c2;
				echo "<h3>$total</h3>";
			?>
              
<?php
			$total=0;
				$count=mysqli_query($con,"SELECT COUNT(TPSId) FROM TPS WHERE User='$userId'");
				while($c=mysqli_fetch_array($count))
				{
					$c1=$c['COUNT(TPSId)'];
				}
				
				$count1=mysqli_query($con,"SELECT COUNT(PIId) FROM PI WHERE User='$userId'");
				while($co=mysqli_fetch_array($count1))
				{
					$c2=$co['COUNT(PIId)'];
				}
				
				$total=$c1+$c2;
				echo "<h3>$total</h3>";
			?>


 --------------------------------------------------------------------------------------------------------------

 createAct.php

 <?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';    
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Activity</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="ionicons.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="skin-yellow-light.css">
    <link rel="stylesheet" href="ionicons.min.css">
    <link rel="stylesheet" href="Create-activity.css">
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
                    <span class="sr-only">
                        Toggle navigation
                    </span>
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
	                                error_reporting(0);
	                                $user = $_SESSION['userID'];
	                                $name = null;
				                    $getName=mysqli_query($con,"SELECT FIRST_NAME, LAST_NAME, ID FROM userdetails WHERE USERNAME='$user'");
				                    while($row = mysqli_fetch_array($getName))
				                    {
				                      $name=$row[0]." ".$row[1];
									  $userId=$row[2];
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
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <div class="flex">
                <div class="pi-parent">
                    <div class="circle">
                        <div class="fa fa-laptop fa-3x icon"></div>
                    </div>
                    <div class="pi-activity" id="pi-activity"> PI Activity </div>
                </div>
                <div class="tps-parent">
                    <div class="circle1">
                        <div class="fa fa-institution fa-3x icon"></div>
                    </div>
                    <div class="tps-activity" id="tps-activity"> TPS Activity </div>
                </div>
                <div class="theory-parent">
                    <div class="circle2">
                        <div class="fa fa-pencil fa-3x icon"></div>
                    </div>
                    <div class="theory-paper" id="theory-paper"> Theory Paper </div>
                </div>
            </div>
        </div><!-- /.content-wrapper -->
        <!-- Main Footer -->
        <!-- Control Sidebar -->
        <!-- Tab panes -->
        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 2.1.4 -->
        <script src="jquery-min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="app.min.js"></script>
        <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
</body>
</html>

----------------------------------------------------------------------------------------------------------------


<div class=\"row\"><label for=\"concept\">Duration:</label><input type=\"text\" class=\"browser-default\"></div><div class=\"row\"><label for=\"concept-test-question\">Question:</label><input type=\"text\" class=\"browser-default\"></div><div class=\"row\"><label for=\"correct-answer\">Answer:</label><input type=\"text\" class=\"browser-default\"></div><div class=\"row\"><a href=\"\" class=\"button\" id=\"nextPhase\"> Next </a></div>

// echo "$topicFromCourse<br>";
    // echo "$conceptAddr<br>";
    // echo "$conceptQuest<br>";
    // echo "$conceptAns<br>";
    // echo "$plausibleDistractor<br>";



<div class='question'><div class='row'><label for='que'>Q </label><textarea name='que' id='' cols='2' rows='2'></textarea></div><div class='row'><label for='que'>Marks </label><input type='number'></div><div class='row'><label for='Ans'>Ans.</label><textarea name='<Ans></Ans>' id='' cols='2' rows='2'></textarea></div></div>


<!--<h3> Create PI Activity</h3>-->
        <!--
       <form action="">
       <h3> TPS Activity</h3>
       <div class="activity">
       <div class="row">
           <h4> Phase <i class="count"></i></h4> 
       </div> 
       <div class="row">
       <label for="topic">Choose Topic For Course:</label>
        <select name="topic" id="" class="browser-default inline-block">
            <option value="">option1</option>
            <option value="">option2</option>
            <option value="">option3</option>
        </select>
        </div>
        <div class="row">
        <label for="concept">Concept Being Addressed:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="concept-test-question">Concept test question:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="correct-answer">Correct Answer:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
               <a href="" class="button"> Next </a>
           </div>
           </div>
          
       </form>
-->



<!--        <h3> Create PI Activity</h3>-->
<!--
       <form action="">
       <h3> TPS Activity</h3>
       <div class="activity">
       <div class="row">
           <h4> Phase <i class="count"></i></h4> 
       </div> 
       <div class="row">
       <label for="topic">Choose Topic For Course:</label>
        <select name="topic" id="" class="browser-default inline-block">
            <option value="">option1</option>
            <option value="">option2</option>
            <option value="">option3</option>
        </select>
        </div>
        <div class="row">
        <label for="concept">Concept Being Addressed:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="concept-test-question">Concept test question:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="correct-answer">Correct Answer:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
               <a href="" class="button"> Next </a>
           </div>
           </div>
          
       </form>
-->


<!--<h3> Create PI Activity</h3>-->
<!--
       <form action="">
       <h3> TPS Activity</h3>
       <div class="activity">
       <div class="row">
           <h4> Phase <i class="count"></i></h4> 
       </div> 
       <div class="row">
       <label for="topic">Choose Topic For Course:</label>
        <select name="topic" id="" class="browser-default inline-block">
            <option value="">option1</option>
            <option value="">option2</option>
            <option value="">option3</option>
        </select>
        </div>
        <div class="row">
        <label for="concept">Concept Being Addressed:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="concept-test-question">Concept test question:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="correct-answer">Correct Answer:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
               <a href="" class="button"> Next </a>
           </div>
           </div>
          
       </form>
-->

<!--				<p>Don't have an Account? <a href="#"> Signup Now!</a></p>-->

 <!--
    						<ul> 
    							<li>
    								<label class="anim">
    									<input type="checkbox" class="checkbox" >
    									<span> Remember me ?</span> 
    								</label> 
    							</li>
    							<li><a href="#">Forgot password?</a> </li>
    						</ul>
    -->

    <!--                        FOR ANDHRA PRADESH-->
                           <select name="city" id="andhra_pradesh" disabled>
                            <option value="" class="Andhra_Pradesh" id="Adoni">Adoni</option>
                            <option value="" class="Andhra_Pradesh" id="Amaravati">Amaravati</option>
                            <option value="" class="Andhra_Pradesh" id="Anantapur">Anantapur</option>
                            <option value="" class="Andhra_Pradesh" id="Bhimavaram">Bhimavaram</option>
                            <option value="" class="Andhra_Pradesh" id="Chilakaluripet">Chilakaluripet</option>
                            <option value="" class="Andhra_Pradesh" id="Chittoor">Chittoor</option>
                            <option value="" class="Andhra_Pradesh" id="Dharmavaram">Dharmavaram</option>
                            <option value="" class="Andhra_Pradesh" id="Eluru">Eluru</option>
                            <option value="" class="Andhra_Pradesh" id="Gudivada">Gudivada</option>
                            <option value="" class="Andhra_Pradesh" id="Guntakal">Guntakal</option>
                            <option value="" class="Andhra_Pradesh" id="Guntur">Guntur</option>
                            <option value="" class="Andhra_Pradesh" id="Hindupur">Hindupur</option>
                            <option value="" class="Andhra_Pradesh" id="Kadapa">Kadapa</option>
                            <option value="" class="Andhra_Pradesh" id="Kakinada">Kakinada</option>
                            <option value="" class="Andhra_Pradesh" id="Kurnool">Kurnool</option>
                            <option value="" class="Andhra_Pradesh" id="Machilipatnam">Machilipatnam</option>
                            <option value="" class="Andhra_Pradesh" id="Madanapalle">Madanapalle</option>
                            <option value="" class="Andhra_Pradesh" id="Nandyal">Nandyal</option>
                            <option value="" class="Andhra_Pradesh" id="Narasaraopet">Narasaraopet</option>
                            <option value="" class="Andhra_Pradesh" id="Nellore">Nellore</option>
                            <option value="" class="Andhra_Pradesh" id="Ongole">Ongole</option>
                            <option value="" class="Andhra_Pradesh" id="Palakollu">Palakollu</option>
                            <option value="" class="Andhra_Pradesh" id="Proddatur">Proddatur</option>
                            <option value="" class="Andhra_Pradesh" id="Rajahmundry">Rajahmundry</option>
                            <option value="" class="Andhra_Pradesh" id="Srikakulam">Srikakulam</option>
                            <option value="" class="Andhra_Pradesh" id="Tadepalligudem">Tadepalligudem</option>
                            <option value="" class="Andhra_Pradesh" id="Tadipatri">Tadipatri</option>
                            <option value="" class="Andhra_Pradesh" id="Tenali">Tenali</option>
                            <option value="" class="Andhra_Pradesh" id="Tirupati">Tirupati</option>
                            <option value="" class="Andhra_Pradesh" id="Vijayawada">Vijayawada</option>
                            <option value="" class="Andhra_Pradesh" id="Visakhapatnam">Visakhapatnam</option>
                            <option value="" class="Andhra_Pradesh" id="Vizianagaram">Vizianagaram</option>
                            </select>

                            <!--                    <input class="text" type="text" name="firstname" placeholder="City" required="">-->

                            <!--                <input class="text" type="text" name="state" placeholder="State" required="">-->

                            <!--					<input class="text" type="text" name="" placeholder="Institue Of Teaching" required="">-->

                            <!--					<input class="text" type="password" name="gender" placeholder="Gender" required="">-->


"<select name='city' id='city' required=''><option value='0' selected disabled>Select City</option><?php $query3 = 'SELECT * FROM statewisecity';$result3 = mysqli_query($con, $query3);while($row = mysqli_fetch_array($result3)){$id = $row[0];$name = $row[1];$i++;echo '<option id=$id value=$id> $name </option>';}?></select><select name='experience' id='experience' required=''><option value='0' selected disabled>Select Experience</option><?php $query3 = 'SELECT * FROM experiencetable';$result3 = mysqli_query($con, $query3);while($row = mysqli_fetch_array($result3)){$id = $row[0];$name = $row[1];$i++;echo '<option id=$id value=$id> $name </option>';}?></select><select name='domiain' id='domain' required=''><option value='0' selected disabled>Select Domain</option><?php $query3 = 'SELECT * FROM domaintable';$result3 = mysqli_query($con, $query3);while($row = mysqli_fetch_array($result3)){$id = $row[0];$name = $row[1];$i++;echo '<option id=$id value=$id> $name </option>';}?></select><select name='courseSelect' id='courseSelect' required=''><option value='0' selected disabled>Select Course</option><?php $query3 = 'SELECT * FROM domainsemcourse';$result3 = mysqli_query($con, $query3);while($row = mysqli_fetch_array($result3)){$id = $row[0];$name = $row[1];$i++;echo '<option id=$id value=$id> $name </option>';}?></select><input type='text' name='contact' placeholder='Contact'><input type='text' name='mailID' placeholder='Email ID'>"




<!-- <select name="city" id="city" required="">
                           <option value="0" selected disabled>Select City</option>
                           <?php
                                $query3 = "SELECT * FROM statewisecity";
                                $result3 = mysqli_query($con, $query3);
                                while($row = mysqli_fetch_array($result3))
                                {
                                    $id = $row[0];
                                    $name = $row[1];
                                    $i++;
                                    echo "<option id=$id value=$id> $name </option>";
                                }
                            ?>
                        </select>
                        <select name="experience" id="experience" required="">
                           <option value="0" selected disabled>Select Experience</option>
                           <?php
                                $query3 = "SELECT * FROM experiencetable";
                                $result3 = mysqli_query($con, $query3);
                                while($row = mysqli_fetch_array($result3))
                                {
                                    $id = $row[0];
                                    $name = $row[1];
                                    $i++;
                                    echo "<option id=$id value=$id> $name </option>";
                                }
                            ?>
                        </select>
                        <select name="domiain" id="domain" required="">
                           <option value="0" selected disabled>Select Domain</option>
                           <?php
                                $query3 = "SELECT * FROM domaintable";
                                $result3 = mysqli_query($con, $query3);
                                while($row = mysqli_fetch_array($result3))
                                {
                                    $id = $row[0];
                                    $name = $row[1];
                                    $i++;
                                    echo "<option id=$id value=$id> $name </option>";
                                }
                            ?>
                        </select>
                        <select name="courseSelect" id="courseSelect" required="">
                           <option value="0" selected disabled>Select Course</option>
                           <?php
                                $query3 = "SELECT * FROM domainsemcourse";
                                $result3 = mysqli_query($con, $query3);
                                while($row = mysqli_fetch_array($result3))
                                {
                                    $id = $row[0];
                                    $name = $row[1];
                                    $i++;
                                    echo "<option id=$id value=$id> $name </option>";
                                }
                            ?>
                        </select>
                        <input type="text" name="contact" placeholder="Contact">
                        <input type="text" name="mailID" placeholder="Email ID"> -->



                        <!--<h3> Create PI Activity</h3>-->
        <!--
    <form action="">
    <h3> TPS Activity</h3>
    <div class="activity">
    <div class="row">
           <h4> Phase <i class="count"></i></h4> 
       </div> 
       <div class="row">
       <label for="topic">Choose Topic For Course:</label>
        <select name="topic" id="" class="browser-default inline-block">
            <option value="">option1</option>
            <option value="">option2</option>
            <option value="">option3</option>
        </select>
        </div>
        <div class="row">
        <label for="concept">Concept Being Addressed:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="concept-test-question">Concept test question:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="correct-answer">Correct Answer:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
               <a href="" class="button"> Next </a>
           </div>
           </div>
          
       </form>
-->

<!--        <h3> Create PI Activity</h3>-->
<!--
       <form action="">
       <h3> TPS Activity</h3>
       <div class="activity">
       <div class="row">
           <h4> Phase <i class="count"></i></h4> 
       </div> 
       <div class="row">
       <label for="topic">Choose Topic For Course:</label>
        <select name="topic" id="" class="browser-default inline-block">
            <option value="">option1</option>
            <option value="">option2</option>
            <option value="">option3</option>
        </select>
        </div>
        <div class="row">
        <label for="concept">Concept Being Addressed:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="concept-test-question">Concept test question:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="correct-answer">Correct Answer:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
               <a href="" class="button"> Next </a>
           </div>
           </div>
          
       </form>
-->


<ul> 
							<li>
								<!-- code -->
							</li>
							<li>
								<!-- code -->
							</li>
						</ul>


						// echo "$username<br>";
	// echo "$password<br>";
	// echo "$repass<br>";
	// echo "$fname<br>";
	// echo "$mname<br>";
	// echo "$lname<br>";
	// echo "$gender<br>";
	// echo "$clg<br>";
	// echo "$domain<br>";
	// echo "$course<br>";
	// echo "$expr<br>";
	// echo "$contact<br>";




<table class='centered striped responsive-table'><thead><tr><td>Activity Id</td><td>Type</td><td>Domain</td><td>Course</td><td>Name Of Professor</td><td>View</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td><a href=''>view</a></td></tr></tbody></table>

<td><a href=''>view</a></td></tr>

<!--        <h3> Create PI Activity</h3>-->
                <!--
       <form action="">
       <h3> TPS Activity</h3>
       <div class="activity">
       <div class="row">
           <h4> Phase <i class="count"></i></h4> 
       </div> 
       <div class="row">
       <label for="topic">Choose Topic For Course:</label>
        <select name="topic" id="" class="browser-default inline-block">
            <option value="">option1</option>
            <option value="">option2</option>
            <option value="">option3</option>
        </select>
        </div>
        <div class="row">
        <label for="concept">Concept Being Addressed:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="concept-test-question">Concept test question:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
        <label for="correct-answer">Correct Answer:</label>
        <input type="text" class="browser-default">
           </div>
           
           <div class="row">
               <a href="" class="button"> Next </a>
           </div>
           </div>
          
       </form>
-->
<!--        <h3> Create PI Activity</h3>-->



<div class="afterClickingNextForFirstTime">
                        <form>
                            <select>
                                <option>value 1</option>
                                <option>value 2</option>
                                <option>value 3</option>

                            </select>
                        </form>
                        <div class="Button">Next</div>
                    </div><br><br>
                    <div class="afterClickingNextForSecondTime">
                        <form>
                            <label for="">Yaha Kya Likha hai?</label>
                            <input type="text">
                            
                            <label for="">Yaha Kya Likha hai?</label>
                            <input type="text">
                            <input type="submit" name="Submit">
                        </form>
                    </div>



                    <div class="afterClickingNextForFirstTime">
               <label for="">Choose Course</label>
                <form>
                    <select>
                        <option>value 1</option>
                        <option>value 2</option>
                        <option>value 3</option>
                    </select>
                </form>
                <div class="Button">Next</div>
            </div><br><br>
            <div class="afterClickingNextForSecondTime">
                <table class="centered striped responsive-table">
                    <thead>
                        <tr>
                            <td>Enrollment Number</td>
                            <td>Course</td>
                            <td>Assignment 1</td>
                            <td>Assignment 2</td>
                            <td>Test</td>
                            <td>Average</td>
                        </tr>
                    </thead>
                    <tbody>                
                    </tbody>
                </table>
            </div>



            <!-- <?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
	// $userSocket1 = socket_create_listen(1337);
	// echo "$userSocket1";
	$message = "Hello World!!";
	$host = "127.0.0.1";
	$port = 5353;
	$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	$result = socket_bind($socket, $host, $port);
	$result = socket_listen($socket, SOMAXCONN);
	$spawn = socket_accept($socket);
	$input = socket_read($spawn, 1024);
	$output = strrev($input) . "\n";
	socket_write($spawn, $output, strlen ($output)) or die("Could not write output\n");
	socket_close($spawn);
	socket_close($socket);
? -->>


----------------------------------------------------------------------------------------------------------------

// set some variables
	$host = "127.0.0.1";
	$port = 25003;
	// don't timeout!
	set_time_limit(0);
	// create socket
	$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");	
	// bind socket to port
	$result = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");
	// start listening for connections
	$result = socket_listen($socket, 3) or die("Could not set up socket listener\n");

	// accept incoming connections
	// spawn another socket to handle communication
	$spawn = socket_accept($socket) or die("Could not accept incoming connection\n");
	// read client input
	$input = socket_read($spawn, 1024) or die("Could not read input\n");
	// clean up input string
	$input = trim($input);
	echo "Client Message : ".$input;
	// reverse client input and send back
	$output = strrev($input) . "\n";
	socket_write($spawn, $output, strlen ($output)) or die("Could not write output\n");
	// close sockets
	socket_close($spawn);
	socket_close($socket);

----------------------------------------------------------------------------------------------------------------	

// echo "Name Of Professor = $row[1]<br>";
                                // echo "Domain = $row[2]<br>";
                                // echo "Course = $row[3]<br>";
                                // echo "Topic = $row[4]<br>";
                                // echo "Type = $row[5]<br><br>";
                                // echo "Think Phase<br><br>";
                                // echo "Duration = $row[6]<br>";
                                // echo "Guiding Question = $row[7]<br>";
                                // echo "Desired Answer = $row[8]<br><br>";
                                // echo "Pair Phase<br><br>";
                                // echo "Duration = $row[9]<br>";
                                // echo "Guiding Question = $row[10]<br>";
                                // echo "Desired Answer = $row[11]<br><br>";
                                // echo "Share Phase<br><br>";
                                // echo "Duration = $row[12]<br>";
                                // echo "Guiding Question = $row[13]<br>";
                                // echo "Desired Answer = $row[14]<br><br>";




                                <!-- <div class="row">
                        <label for="">Name Of Professor</label>
                        <input type="text" value="mr.nobody" readonly>
                    </div>
                    <div class="row">
                        <label for="">Domain</label>
                        <input type="text" value="mr.nobody" readonly>
                    </div>
                    <div class="row">
                        <label for="">Course</label>
                        <input type="text" value="mr.nobody" readonly>
                    </div>   
                    <div class="row">
                        <label for="">Topic</label>
                        <input type="text" value="mr.nobody" readonly>
                    </div>     
                    <div class="row">
                        <label for="">Type</label>
                        <input type="text" value="mr.nobody" readonly>
                    </div>  
                    <div class="row">
                        <label for="">Concept Being Addressed</label>
                        <input type="text" value="mr.nobody" readonly>
                    </div>  
                    <div class="row">
                        <label for="">Concept Question</label>
                        <input type="text" value="mr.nobody" readonly>
                    </div>  
                    <div class="row">
                        <label for="">Correct Answer</label>
                        <input type="text" value="mr.nobody" readonly>
                    </div>  
                    <div class="row">
                        <label for="">Plausible Distractor</label>
                        <textarea readonly></textarea>
                    </div>
                </div> -->