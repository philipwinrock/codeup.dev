<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test.db', 'codeup', 'rocks');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





$national_parks = [

  ['park_name' => 'Arches',  'location' => 'Utah',				   'date_established' =>'1978-10-10',	'area_in_acres' => 1082866,  'description'=>"Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring. The yellow-hued Grand Canyon of the Yellowstone River has a number of scenic waterfalls, and four mountain ranges run through the park. More than 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk, make this park one of the best wildlife viewing spots in the country."],

  ['park_name' => 'Arcadia', 'location' => 'Maine',				   'date_established' =>'1919-01-01',	'area_in_acres' =>   47389,  'description'=>"Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats." ],

  ['park_name' => 'Yellow',  'location' => 'Wyoming-Montana-Idaho','date_established' => '1872-10-10',	'area_in_acres' =>  2219790, 'description'=>"Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring. The yellow-hued Grand Canyon of the Yellowstone River has a number of scenic waterfalls, and four mountain ranges run through the park. More than 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk, make this park one of the best wildlife viewing spots in the country." ],

  ['park_name' => 'Arches',  'location' => 'Utah',				   'date_established' => '1978-10-10',	'area_in_acres' =>  1082866, 'description'=>"Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring. The yellow-hued Grand Canyon of the Yellowstone River has a number of scenic waterfalls, and four mountain ranges run through the park. More than 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk, make this park one of the best wildlife viewing spots in the country."],

  ['park_name' => 'Badlands','location' => 'S.Dakota',			   'date_established' => '1978-10-10',	'area_in_acres' =>   242755, 'description'=>"The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world's richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes."],

  ['park_name' => 'Carlsbad','location' => 'New Mexico',		   'date_established' => '1930-10-10',	'area_in_acres' =>    46766, 'description'=>"Carlsbad Caverns has 117 caves, the longest of which is over 120 miles (190 km) long. The Big Room is almost 4,000 feet (1,200 m) long, and the caves are home to over 400,000 Mexican Free-tailed Bats and sixteen other species. Above ground are the Chihuahuan Desert and Rattlesnake Springs. "],

  ['park_name' => 'Arcadia', 'location' => 'Maine', 			   'date_established' => '1919-01-01',  'area_in_acres' =>    47389, 'description'=>"Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats."],

  ['park_name' => 'Yellow',  'location' => 'Wyoming-Montana-Idaho','date_established' => '1872-10-10',  'area_in_acres' =>  2219790, 'description'=>"Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring. The yellow-hued Grand Canyon of the Yellowstone River has a number of scenic waterfalls, and four mountain ranges run through the park. More than 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk, make this park one of the best wildlife viewing spots in the country."],

  ['park_name' => 'Arches',  'location' => 'Utah',				   'date_established' => '1978-10-10',  'area_in_acres' =>  1082866, 'description'=>"Situated on the Yellowstone Caldera, the park has an expansive network of geothermal areas including vividly colored hot springs, boiling mud pots, and regularly erupting geysers, the best-known being Old Faithful and Grand Prismatic Spring. The yellow-hued Grand Canyon of the Yellowstone River has a number of scenic waterfalls, and four mountain ranges run through the park. More than 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk, make this park one of the best wildlife viewing spots in the country."],
  
  ['park_name' => 'Badlands','location' => 'S.Dakota', 			   'date_established' => '1978-10-10',  'area_in_acres' =>   242755, 'description'=>"The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world's richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes."],
  
  ['park_name' => 'Carlsbad','location' => 'New Mexico',	       'date_established' => '1930-10-10',  'area_in_acres' =>    46766, 'description'=>"Carlsbad Caverns has 117 caves, the longest of which is over 120 miles (190 km) long. The Big Room is almost 4,000 feet (1,200 m) long, and the caves are home to over 400,000 Mexican Free-tailed Bats and sixteen other species. Above ground are the Chihuahuan Desert and Rattlesnake Springs."]
];



	$stmt = $dbc->prepare('INSERT INTO national_parks (park_name, location, date_established, area_in_acres, description ) 
		VALUES (:park_name, :location, :date_established, :area_in_acres, :description)');
	
	foreach ($national_parks as $national_park) {
		
		
		
		$stmt->bindValue(':park_name', 		 $national_park['park_name'],		PDO::PARAM_STR);
		$stmt->bindValue(':location', 		 $national_park['location'],        PDO::PARAM_STR);
		$stmt->bindValue(':date_established',$national_park['date_established'],PDO::PARAM_STR);
		$stmt->bindValue(':area_in_acres',   $national_park['area_in_acres'],	PDO::PARAM_STR);
		$stmt->bindValue(':description',  	 $national_park['description'],		PDO::PARAM_STR);
		$stmt->execute();

		echo '<p>' . "Inserted ID: "  . $dbc->lastInsertId() . '</p>';
	}









































