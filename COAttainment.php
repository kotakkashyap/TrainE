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
        <!--    <link rel="stylesheet" href="custom2.css">-->
        <link rel="stylesheet" href="pi-activity-create-new.css">
        <!--    <link rel="stylesheet" href="custom-for-dont-know.css">-->
        <style>
            .button
            {
                width: 100px;
                padding: 5px 10px;
                text-align: center;
                font-family: sans-serif;
                font-size: 15px;
                text-transform: uppercase;
                border: solid 1px #673ac7;
                margin-top: 35px;
                display: block;
                color: #673ac7;
                background: #fff;
                
            }
            .button:hover{
                background: #673ac7;
                color: #fff;
                transition: background .7s;
                transition: color .7s;
            }
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
                                            $user = $_SESSION['userID'];
                                            $name = "";
                                            $query = "SELECT FIRST_NAME, LAST_NAME FROM userdetails WHERE USERNAME='$user'";
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
                            <a href="Dashboard.php">
                                <i class="fa fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <!-- code -->
                        </li>    
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">   
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                <div class="container">
                    <div class="appearByDefault">
                        <label for="course">Course</label>       
                        <select name="courseSelect" id="courseSelect">
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
                        <div class="button" id="next">Next</div>
                    </div><br><br>
                    <div id="anotherDropdown"></div><br>
                    <div id="anotherButton"></div>
                    <div id="htmlCode"></div>
                </div>
            </div>   
        </div>
        <script type="text/javascript" src="jquery-min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#next").click(function(){
                    var courseIn = document.getElementById("courseSelect").value;
                    console.log(courseIn);
                    var count = 0;
                    $.ajax({
                        url: 'http://localhost/Projects/final_year/GetCO.php?CourseIn='+courseIn,
                        success: function(data, status){
                            var anotherDropdown = "<label>CO</label><select id='CO' name='CO'><option value='0'>Choose CO</option>";
                            $.each(data, function(i){
                                row = data[i];
                                COName = row.CORet;
                                anotherDropdown = anotherDropdown + "<option value="+ (++count) +">"+ COName +"</option>";
                            });
                            anotherDropdown = anotherDropdown + "</select>";
                            anotherButton = "<button id='next2' class='button'>Next</button><br>";
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
                            var htmlCode = "<form action='CalculateCo.php' method='post'><br><label>Number Of Questions Of This CO : </label><input type='text' name='noOfQuest' id='noOfQuest'><br><br><label>Number Of Students Attempted Questions Of this CO : </label><input type='text' name='noOfStudAttempt' id='noOfStudAttempt'><br><br><input type='Submit' name='Submit'></form>";
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
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="app.min.js"></script>
        <!--Optionally, you can add Slimscroll and FastClick plugins.
            Both of these plugins are recommended to enhance the
            user experience. Slimscroll is required when using the
            fixed layout.
        -->
    </body>
</html>