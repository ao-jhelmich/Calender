<?php 

	$db = new mysqli('localhost','root','','calendar');
	$id = ($_GET['id']);
	$query = "DELETE FROM `calendar`.`birthdays` WHERE `birthdays`.`id` = '$id'";
	$result = $db->query($query);
	//echo $query;
	header("Location: ../index.php");


 ?>