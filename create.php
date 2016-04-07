<?php 
	require_once'common/create.logic.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h2>Creër een verjaardag</h2>
	<form method="post" action="common/create.logic.php">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Jaar:</label>
			<input type="text" id="year" name="year">
		</div>
		<div>
			<label for="name">Maand:</label>
			<select name="month" id="month">
				<?php 
					foreach ($months as $month):
				 ?>
					<option value="<?=$month[1]?>"><?=$month[0]?></option>}
				<?php 
					endforeach;
				 ?>
			</select>
		</div>
		<div>
			<label for="name">Dag:</label>
			<input type="text" id="day" name="day">
		</div>
		<div>
		<input type="submit">
		</div>
	</form>
</body>
</html>