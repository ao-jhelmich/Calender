0<?php 
	require_once'common/index.logic.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Verjaardagskalender</title>
 	<link rel="stylesheet" type="text/css" href="main.css">
 </head>
 <body>
		<?php 
			foreach ($bdays as $bday){
				if ($currMonth != $bday['mid']) {
					$currMonth = $bday['mid'];
					echo "<h1>" . $bday['month'] . "</h1>";
				}
				if ($currDay != $bday['day']) {
					$currDay = $bday['day'];
					echo"<h2>" . $bday['day'] . "</h2>";
				} ?>
		        <p>
		            <a href="edit.php?id=<?=$bday['bid']?>"><?=$bday['person']?>(<?=$bday['year']?>)</a>
		                
		            <a href="delete.php?id=<?=$bday['bid']?>">x</a>
		        </p>
		<?php 
			}
		?>


     <p><a href="create.php">+ Toevoegen</a></p>

 </body>
 </html>
