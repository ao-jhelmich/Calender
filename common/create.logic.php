<?php 
	require_once'info.php';

	$query = "SELECT * FROM month";
	$result = $conn -> query($query);
	$months = $result -> fetch_all();	


	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','calendar');
	
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$year = $db->escape_string($_POST["year"]);
		$day = $db->escape_string($_POST["day"]);
		$month = $db->escape_string($_POST["month"]);
		
		// Prepare query and execute
		$query = "INSERT INTO `birthdays`(`person`, `day`, `month`, `year`) VALUES ('$name', '$day', '$month', '$year')";
		$result = $db->query($query);

	
    // Tell the browser to go back to the index page.
    header("Location: ../index.php");
    exit();
	endif;

?>




