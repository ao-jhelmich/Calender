<?php 

	$db = new mysqli('localhost','root','','calendar');

	$id = ($_GET['id']);
	$person = ($_GET['name']);
	$day = ($_GET['day']);
	$month = ($_GET['month']);
	$year = ($_GET['year']);


	$query = "UPDATE `calendar`.`birthdays` SET `person` = '$person', `day` = '$day', `month` = '$month', `year` = '$year' WHERE `birthdays`.`id` = $id";
	$result = $db->query($query);
	//echo $query;
	header("Location: ../index.php");

?>