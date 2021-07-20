<?php
    include 'SessionCreatedCheck.php';
    include 'TempHeader.html';
    include 'MysqlConnectionCreated.php';
    $topicFromCourse = $_REQUEST['topicFromCourse'];
    $conceptAddr = $_REQUEST['conceptAddr'];
    $conceptQuest = $_REQUEST['conceptQuest'];
    $conceptAns = $_REQUEST['correctAns'];
    $plausibleDistractor = $_REQUEST['plausibleDistractor'];
    $nameOfUser = $_SESSION['username'];
    $userID = $_SESSION['userID'];
    $domainOfUser = null;
    $courseOfUser = null;
    $topicChosen = null;
    $query1 = "SELECT DOMAIN,COURSES_TAUGHT FROM userdetails WHERE FIRST_NAME='$nameOfUser' AND USERNAME='$userID'";
    $result1 = mysqli_query($con, $query1);
    while($row = mysqli_fetch_array($result1))
    {
        $domainOfUser = $row[0];
        $courseOfUser = $row[1];
    }
    $query2 = "SELECT TOPIC FROM coursewisetopic WHERE ID='$topicFromCourse'";
    $result2 = mysqli_query($con, $query2);
    while($row = mysqli_fetch_array($result2))
    {
        $topicChosen = $row[0];
    }
    $query = "INSERT INTO piactivity(NAME_OF_PROFESSOR, DOMAIN, COURSE, TOPIC, CONCEPTBEINGADDRESSED, CONCEPTQUESTION, CORRECTANSWER, PLAUSIBLEDISTRACTORS) VALUES('$nameOfUser', '$domainOfUser', '$courseOfUser', '$topicChosen', '$conceptAddr', '$conceptQuest', '$conceptAns', '$plausibleDistractor')";
    echo "$query";
    if(mysqli_query($con, $query))
    {
        echo "Row Insertion Successful!!";
        header("Location:myActivities.php");
    }
    else
    {
        echo "Row Insertion Unsuccessful!!!";
    }
?>