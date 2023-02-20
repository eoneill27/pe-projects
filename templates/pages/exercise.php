
<?php 

	$json = file_get_contents('data/exercises.json');
	$array = json_decode($json, true);

	foreach($array['cards'] as $card) {
		if($card["slug"] == $_GET["slug"]) {
			$slug = $card["slug"];
		}
	}

	include("projects/e4p/" . $slug . ".php"); 

?>

