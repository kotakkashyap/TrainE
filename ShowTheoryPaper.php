<?php
	include 'SessionCreatedCheck.php';
	include 'TempHeader.html';
	include 'MysqlConnectionCreated.php';
	$noOfQuest = $_REQUEST['noOfQuests'];
	$quest = $_REQUEST['quest'];
	$marksForQuest = $_REQUEST['marksForQuestion'];
	$ans = $_REQUEST['ans'];
	// echo "$noOfQuest";
	$count = 0;
	$count1 = 1;
	echo "<form action='TheoryPaperCreateAction.php'>";
	while($count < $noOfQuest)
	{
		echo "Q$count1 : $quest[$count] -- $marksForQuest[$count]<br><br>";
		echo "A$count1 : $ans[$count]<br><br>";
		echo "<input type='hidden' name='noOfQuest' value='$noOfQuest'>";
		echo "<input type='hidden' name='quest[]' value='$quest[$count]'>";
		echo "<input type='hidden' name='marksForQuest[]' value='$marksForQuest[$count]'>";
		echo "<input type='hidden' name='ans[]' value='$ans[$count]'>";
		$count++;
		$count1++;
	}
	echo "<input type='submit' value='Submit'>";
	echo "</form>";
	// echo "<button id='ok' onclick='location.href=\"TheoryPaperCreateAction.php\"'>OK</button>";
?>