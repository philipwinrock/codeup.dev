<?php
require '../dbconnect.php';

if (!empty($_POST)) {
	// var_dump($_POST);

	if (!empty($_POST['Park_name']) && !empty($_POST['Location']) && !empty($_POST['Date-estab']) && !empty($_POST['Total-acres']) && !empty($_POST['Description'])) {
	    // PREVENT CODE INJECTION ON EACH INPUT
	    foreach ($_POST as $key => $input) {
	        $_POST[$key] = strip_tags($input);
	    }


	    // ASSIGN FORM INPUT DATA TO SPECIFIC INDEXES
	    $national_park["park_name"] = 		 $_POST['Park_name'];
	    $national_park['location'] = 		 $_POST['Location'];
	    $national_park['date_established'] = $_POST['Date-estab'];
	    $national_park['area_in_acres'] = 	 $_POST['Total-acres'];
		$national_park['description'] = 	 $_POST['Description'];

	$query = 'INSERT INTO national_parks (park_name, location, date_established, area_in_acres, description) VALUES (:park_name, :location, :date_established, :area_in_acres, :description)';

		$stmt = $dbc->prepare($query);
		$stmt->bindValue(':park_name', 		 $national_park['park_name'],		PDO::PARAM_STR);
		$stmt->bindValue(':location', 		 $national_park['location'],        PDO::PARAM_STR);
		$stmt->bindValue(':date_established',$national_park['date_established'],PDO::PARAM_STR);
		$stmt->bindValue(':area_in_acres',   $national_park['area_in_acres'],	PDO::PARAM_STR);
		$stmt->bindValue(':description',  	 $national_park['description'],		PDO::PARAM_STR);

		$stmt->execute();

	}
}

$offset= isset($_GET['offset']) ? intval($_GET['offset']) : 0;
	// function getParks
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

<style>body { background-color: #d0e4fe; } </style>

	
</head>
<body>

	<table class= 'table'>
	<th><h2><u>Park Name</u></h2></th>
	<th><h2><u>Location</u></h2></th>
	<th><h2><u>Date Est.</u></h2></th>
	<th><h2><u>Area in Acres</u></h2></th>


<?foreach ($parks as $parkInfo):?>
	<tr>
		<td><h3><?= $parkInfo['park_name'];?></h3></td>
		<td><h4><?= $parkInfo['location'];?></h4></td>
		<td><h4><?= $parkInfo['date_established'];?></h4></td>
		<td><h4><?= $parkInfo['area_in_acres'];?></h4></td>
	</tr>

<?endforeach;?>

</table>
	<? if ($offset != 0):?>
		<a href="?offset=<?=$offset-4;?>"><button class="btn btn-primary">Prev</button></a>
	<? endif; ?> 
	<? if (($offset +4)< $count): ?>
	<a href="?offset=<?=$offset+4;?>"><button class="btn btn-primary pull-right">Next</button></a> 
	<? endif; ?>


<h2>Add New Park</h2>
    <form method="POST">
        <label for="Park_name">Parkname: </label> <input type="text" name="Park_name" id="Park_name" class="form-control"> <br>
        <label for="Location">Location: </label> <input type="text" name="Location" id="Location" class="form-control"> <br>
        <label for="Date-estab">Date-Estab: </label> <input type="text" name="Date-estab" id="Date-estab" class="form-control"> <br>
        <label for="Total-acres">Total-acres: </label> <input type="text" name="Total-acres" id="Total-acres" class="form-control"> <br>
        <label for="Description">Describtion: </label> <input type="text" name="Description" id="Description" class="form-control"> <br> 
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>      
        
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>

</html>