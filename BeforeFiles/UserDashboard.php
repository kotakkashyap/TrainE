
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
    <link rel="stylesheet" href="font-awesome.min.css">
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
    
    <link rel="stylesheet" href="custom.css">

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
          <span class="logo-mini">S2D</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SAIL2D</b></span>
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
                  
                  <span class="hidden-xs"><?echo $name;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="avatar.png" class="img-circle" alt="User Image">
                    <p>
                      <?echo $name;?>
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
              <p><?echo $name;?></p>
              <!-- Status -->
            </div>
          </div>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="settings.php"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
            
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


              <p>Your Activites</p>
            </div>
            <div class="icon">
              Y
            </div>
            <a href="yourActivities.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
			
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
              

              <p>Reviews Received</p>
            </div>
            <div class="icon">
              R
            </div>
            <a href="receivedReviews.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
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

              <p>Reviews Provided</p>
            </div>
            <div class="icon">
              R
            </div>
            <a href="givenReviews.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

        <!-- <br><br><br><br><br><br><br><br> -->
        
  <!-- <div class="box"><br><br><br><br> -->
          <div class="row"></div>

            <div class="row">
            <div class="panel panel-default">
  <div class="panel-body">
  
  <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="createActivity.php"><image src="create.png" height=100 width=88></image><br><h4>Create Activity</h4>
        </a></center>
            </div>
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="viewActivity.php"><image src="newspaper.png" height=100 width=88></image><br><h4>View / Review Activity</h4></a></center>
            </div>
			
			<div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="viewReview.php"><image src="review.png" height=100 width=88></image><br><h4>Pending Reviews</h4>
        </a></center>
            </div>
            
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="givenReviews.php"><image src="review.png" height=100 width=88></image><br><h4>Review Provided</h4>
        </a></center>
            </div>
			
			<div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="disagree.php"><image src="hands.png" height=100 width=88></image><br><h4>Disagreement Resolver</h4>
        </a></center>
            </div>

<div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="PendingRatings.php"><image src="pending.png" height=100 width=88></image><br><h4>Pending Ratings</h4>
        </a></center>
            </div>

            
        
            </div>
            </div>
            </div>
            

           <!--  </div>
            </div> -->

            
        


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          
        </div>
        <!-- Default to the left -->
        <strong>SAIL2D</strong>
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
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
