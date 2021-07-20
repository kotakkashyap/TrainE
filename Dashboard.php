<?php
	include 'SessionCreatedCheck.php';
	include 'MysqlConnectionCreated.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="AdminLTE.css">
        <!--
            AdminLTE Skins. We have chosen the skin-blue for this starter
            page. However, you can choose any other skin. Make sure you
            apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="skin-yellow-light.css">
        <link rel="stylesheet" href="ionicons.min.css">
        <link rel="stylesheet" href="custom2.css">
        <style>
            .pull-left p
            {
               color: #fff;
                font-size: 18px;
                line-height: 30px;
            }
        </style>
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
                                    <span class="hidden-xs">
                                        <?php
                                        	$uname = $_SESSION['userID'];
                                        	$name = "";
                                        	$query = "SELECT FIRST_NAME, LAST_NAME FROM userdetails WHERE USERNAME='$uname'";
                                        	$result = mysqli_query($con, $query);
                                        	while($row = mysqli_fetch_array($result))
                                        	{
                                        		$name = $row[0]." ".$row[1];
                                        	}
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
                            <a href="#">
                                <i class="fa fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="StudentSection.php">
                                <i class="fa fa-user"></i>
                                <span>Student Section</span>
                            </a>
                        </li>    
                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <h1>
                DASHBOARD
            </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->  
                <div class="col-lg-4 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                			<?php
	                			$total = 0;
                				$count = mysqli_query($con,"SELECT COUNT(ID) FROM tpsactivity WHERE NAME_OF_PROFESSOR='$name'");
                				while($c = mysqli_fetch_array($count))
                				{
                					$c1 = $c['COUNT(ID)'];
                				}
                				$count1 = mysqli_query($con,"SELECT COUNT(ID) FROM piactivity WHERE NAME_OF_PROFESSOR='$name'");
                				while($co = mysqli_fetch_array($count1))
                				{
                					$c2 = $co['COUNT(ID)'];
                				}
                				$count2=mysqli_query($con,"SELECT COUNT(ID) FROM theorypaper WHERE NAME_OF_PROFESSOR='$name'");
                				while($co = mysqli_fetch_array($count2))
                				{
                					$c3 = $co['COUNT(ID)'];
                				}
                				$total = $c1 + $c2 + $c3;
                				echo "<h3>$total</h3>";
                			?>
                            <p>Your Activites</p>
                        </div>
                        <div class="icon">
                            Y
                        </div>
                        <a href="myActivities.php" class="small-box-footer">More info
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">	
                			<?php
	                			$total=0;
                				$count=mysqli_query($con,"SELECT COUNT(ID) FROM givenreviews WHERE GIVENTO='$name'");
                				while($c=mysqli_fetch_array($count))
                				{
                					$c1=$c['COUNT(ID)'];
                				}
                				$total=$c1;
                				echo "<h3>$total</h3>";
                			?>
                            <p>Received Reviews</p>
                        </div>
                        <div class="icon">
                            R
                        </div>
                        <a href="ReceivedReviews.php" class="small-box-footer">More info
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                			<?php
	                			$total=0;
                				$count=mysqli_query($con,"SELECT COUNT(ID) FROM givenreviewa WHERE GIVENBY='$name'");
                				while($c=mysqli_fetch_array($count))
                				{
                					$c1 = $c['COUNT(ID)'];
                				}
                  				$total = $c1;
                				echo "<h3>$total</h3>";
                			?>
                            <p>Given Reviews</p>
                        </div>
                        <div class="icon">
                            G
                        </div>
                        <a href="GivenReviews.php" class="small-box-footer">More info
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- <br><br><br><br><br><br><br><br> -->
                <!-- <div class="box"><br><br><br><br> -->
                <div class="row"></div>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-3 col-sm=6 col-xs-6">
                                <center>
                                    <a href="CreateAct.php">
                                        <image src="create.png" height=100 width=88></image><br>
                                        <h4>Create Activity</h4>
                                    </a>
                                </center>
                            </div>
                            <div class="col-md-3 col-sm=6 col-xs-6">
                                <center>
                                    <a href="browseActivity.php">
                                        <image src="newspaper.png" height=100 width=88></image><br>
                                        <h4>Browse Activity</h4>
                                    </a>
                                </center>
                            </div>	
                			<div class="col-md-3 col-sm=6 col-xs-6">
                            <center>
                                <a href="Disagreement.php">
                                    <image src="hands.png" height=100 width=88></image><br>
                                    <h4>Disagreement Resolver</h4>
                                </a>
                            </center>
                            </div>
                            <div class="col-md-3 col-sm=6 col-xs-6">
                                <center>
                                    <a href="PendingRatings.php">
                                        <image src="pending.png" height=100 width=88></image><br>
                                        <h4>Pending Ratings</h4>
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">      
            </div>
            <!-- Default to the left -->
            <strong>TrainE</strong>
        </footer>
        <!-- Control Sidebar -->
            <!-- Tab panes -->
        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 2.1.4 -->
        <script src="jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="app.min.js"></script>
        <!-- 
            Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. 
        -->
    </body>
</html>