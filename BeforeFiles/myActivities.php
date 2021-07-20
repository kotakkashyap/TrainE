<?php
    include 'SessionCreatedCheck.php';
    include "MysqlConnectionCreated.php";
    include "TempHeader.html";
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Activities</title>
</head>
<body>
    PI : <br>
    <table border="5">
        <th> ACTIVITY ID </th>
        <th> TYPE OF ACTIVITY </th>
        <th> RATING </th>
        <th> VIEW </th>
        <?php
            $nameOfUser = $_SESSION['username'];
            $query = "SELECT ID,TYPE,RATING FROM piactivity WHERE NAME_OF_PROFESSOR = '$nameOfUser'";
            $result = mysqli_query($con ,$query);
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                    echo "<td> $row[0] </td>";
                    echo "<td> $row[1] </td>";
                    echo "<td> $row[2] </td>";
                    echo "<td> <a href='ViewMyActivity.php?activityID=$row[0]&activityType=$row[1]'>View</a> </td>";
                echo "</tr>";
            }
        ?>
    </table><br>
    TPS : <br>
    <table border="5">
        <th> ACTIVITY ID </th>
        <th> TYPE OF ACTIVITY </th>
        <th> RATING </th>
        <th> VIEW </th>
        <?php
            $nameOfUser = $_SESSION['username'];
            $query = "SELECT ID,TYPE,RATING FROM tpsactivity WHERE NAME_OF_PROFESSOR = '$nameOfUser'";
            $result = mysqli_query($con ,$query);
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                    echo "<td> $row[0] </td>";
                    echo "<td> $row[1] </td>";
                    echo "<td> $row[2] </td>";
                    echo "<td> <a href='ViewMyActivity.php?activityID=$row[0]&activityType=$row[1]'>View</a> </td>";
                echo "</tr>";
            }
        ?>
    </table><br>
    Theory Paper : <br>
    <table border="5">
        <th> ACTIVITY ID </th>
        <th> TYPE OF ACTIVITY </th>
        <th> RATING </th>
        <th> VIEW </th>
        <?php
            $nameOfUser = $_SESSION['username'];
            $query = "SELECT ID,TYPE,RATING FROM theorypaper WHERE NAME_OF_PROFESSOR = '$nameOfUser'";
            $result = mysqli_query($con ,$query);
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                    echo "<td> $row[0] </td>";
                    echo "<td> $row[1] </td>";
                    echo "<td> $row[2] </td>";
                    echo "<td> <a href='ViewMyActivity.php?activityID=$row[0]&activityType=$row[1]'>View</a> </td>";
                echo "</tr>";
            }
        ?>
    </table><br>
</body>
</html>