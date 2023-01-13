<?php

$name = "Emily";

$age = 39;

$friend1 = "Ann";

$friend2 = "Kimmy";


$array = [34, 35, 29, 2, 18];

$stringBand = ["banjo", "fiddle", "mandolin", "upright bass"];

$randomArray = ["turkey", 14, true, "Nico", "azure"];


$favoriteBands = [
	"The Beatles", 
	"Neko Case", 
	"Waxahatchee", 
	"Shovels and Rope", 
	"Apollo Ghosts", 
	"Lucius",
];

foreach($favoriteBands as $band) {
	$message = "I really like the band $band";
	echo "<li>$message</li>";
}

$favoriteNumbers = [13, 12, 24, 27, 23, 18, 30, 33, 39, 17, 98];

foreach($favoriteNumbers as $number) {
	if ($number < 20) {
		echo "<li>$number</li>";
	}
}

for($i = 1; $i <= 34; $i++) {
	if ($i != 12 && $i != 17 && $i != 23) {
		echo $i . "\r";
	}
	
}


?>

