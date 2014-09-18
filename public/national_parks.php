<?php
require '../dbconnect.php';



// $query = 'Create Table national_parks(
// id INT NOT NULL AUTO_INCREMENT,
// park_name VARCHAR(240) NOT NULL,
// location VARCHAR(240) NOT NULL,
// date_established DATE NOT NULL,
// area_in_acres INT(50) NOT NULL,
// PRIMARY KEY (id)
// )';


$offset= isset($_GET['offset']) ? intval($_GET['offset']) : 0;



$stmt = $dbc->query("SELECT park_name, location ,date_established , area_in_acres FROM national_parks 
LIMIT 4 OFFSET $offset");

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count=(int)$dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
?>
<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	
</head>
<body>

	<table class= 'table table-striped'>
		<th><h4><u>Park Name</u></h4></th>
		<th><h4><u>Location</u></h4></th>
		<th><h4><u>Date Est.</u></h4></th>
		<th><h4><u>Tot. Acres</u></h4></th>

		<?foreach ($parks as $parkInfo):?>

			<tr>

				<td><h3><?= $parkInfo['park_name'];?></h3></td>
				<td><h4><?= $parkInfo['location'];?></h4></td>
				<td><h4><?= $parkInfo['date_established'];?></h4></td>
				<td><h4><?= $parkInfo['area_in_acres'];?></h4></td>
			</tr>
		<?endforeach?>
	</table>
	<? if ($offset != 0):?>
		<a href="?offset=<?=$offset-4;?>"><button class="btn btn-primary">Prev</button></a>
	<? endif; ?> 
	<? if (($offset +4)< $count): ?>
		<a href="?offset=<?=$offset+4;?>"><button class="btn btn-primary pull-right">Next</button></a> 
	<? endif; ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>







	


