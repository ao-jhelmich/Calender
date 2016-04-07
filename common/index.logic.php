<?php 
    require_once'info.php';
	$query = "SELECT birthdays.person, birthdays.day, birthdays.month, birthdays.year, month.month, month.id AS mid, birthdays.id AS bid FROM birthdays LEFT JOIN month ON birthdays.month=month.id ORDER BY month.id, birthdays.day, birthdays.year ASC";
	$result = $conn -> query($query);
	$bdays = $result -> fetch_all(MYSQL_ASSOC);

	$currMonth= null;
	$currDay = null;

	// /var_dump($bdays);
 ?>