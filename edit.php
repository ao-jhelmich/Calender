<?php 
 	require_once'common/info.php';

 	$id = $conn->escape_string($_GET["id"]);

	$query = "	SELECT birthdays.person, birthdays.day, birthdays.month, birthdays.year, month.month,birthdays.id 
				AS bid 
				FROM birthdays 
				LEFT JOIN month ON birthdays.month=month.id 
				WHERE birthdays.id = $id";
	$result = $conn -> query($query);
	$bdays = $result -> fetch_all(MYSQLI_ASSOC);

	//var_dump($bdays);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h1>Wijzigen:</h1><br>
	<form method="GET" action="common/edit.logic.php">
	<input type="hidden" name="id" value="<?=$bdays[0]['bid']?>">
	<label>Naam:<input type="text" name="name" value="<?=$bdays[0]['person']?>"></label><br>
	<label>Jaar:<input type="text" name="year" value="<?=$bdays[0]['year']?>"></label><br>
	<label>Dag:<input type="text" name="day" value="<?=$bdays[0]['day']?>"></label><br>
	<label>Maand:<input type="text" name="month" value="<?=$bdays[0]['month']?>"></label><br>
	<input type="submit" value="verzenden">
	</form>
	<a href="index.php"><button>Annuleren</button></a>
</body>
</html>