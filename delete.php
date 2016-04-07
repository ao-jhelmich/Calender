<?php 
	require_once'common/info.php';

	$id = $conn->escape_string($_GET["id"]);

	$query = "SELECT birthdays.person, birthdays.day, birthdays.month, birthdays.year, month.month,birthdays.id AS bid FROM birthdays LEFT JOIN month ON birthdays.month=month.id WHERE birthdays.id = $id";
	$result = $conn -> query($query);
	$bdays = $result -> fetch_all(MYSQLI_ASSOC);
	//var_dump($bdays);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delete</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h4>Weet je zeker dat je dit wilt verwijderen:</h4>
		<form method="GET" action="common/delete.logic.php">
			<input type="hidden" name="id" value="<?=$bdays[0]['bid']?>"><br>
			<input type="text" name="person" value="<?=$bdays[0]['person']?>"><br>
			<input type="text" name="day" value="<?=$bdays[0]['day']?>"><br>
			<input type="text" name="month" value="<?=$bdays[0]['month']?>"><br>
			<input type="text" name="year" value="<?=$bdays[0]['year']?>"><br>
			<input type="submit" value="Ja">
		</form>
		<a href="index.php"><button>Nee</button></a>
</body>
</html>