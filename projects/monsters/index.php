<!doctype html>
<html>
	<head>
		<title>Adopt-a-Monster Adoption Service</title>
		
		<link href="css/style.css" rel="stylesheet">

	</head>

	<body>
		<inner-column>
			<h1 class="heyyou-voice">Adopt-a-Monster</h1>

			<?php

				$codey = [
					"id" => "101",
					"name" => "Codey",
					"favoriteFood" => "pizza",
					"favoriteToy" => "slinky",
					"favoriteAnimal" => "lions",
					"age" => 7,
					"adopted" => true,
					"portrait" => "images/codey.jpg",
				];

				$fragoo = [
					"id" => "102",
					"name" => "Fragoo",
					"favoriteFood" => "pork chops",
					"favoriteToy" => "slinky",
					"favoriteAnimal" => "lions",
					"age" => 8,
					"adopted" => false,
					"portrait" => "images/fragoo.jpg",
				];

				$lima = [
					"id" => "103",
					"name" => "Limabean",
					"favoriteFood" => "marzipan",
					"favoriteToy" => "slinky",
					"favoriteAnimal" => "lions",
					"age" => 4,
					"adopted" => false,
					"portrait" => "images/limabean.jpg",
				];

				$reads = [
					"id" => "104",
					"name" => "Miss Reads-a-Lot",
					"favoriteFood" => "marzipan",
					"favoriteToy" => "slinky",
					"favoriteAnimal" => "lions",
					"age" => 4,
					"adopted" => false,
					"portrait" => "images/miss-reads-a-lot.jpg",
				];

				$banana = [
					"id" => "105",
					"name" => "Mr. Banana",
					"favoriteFood" => "marzipan",
					"favoriteToy" => "Slinky",
					"favoriteAnimal" => "lions",
					"age" => 4,
					"adopted" => false,
					"portrait" => "images/mr-banana.jpg",
				];

				$orangina = [
					"id" => "106",
					"name" => "Orangina",
					"favoriteFood" => "marzipan",
					"favoriteToy" => "slinky",
					"favoriteAnimal" => "lions",
					"age" => 4,
					"adopted" => false,
					"portrait" => "images/orangina.jpg",
				];

				$shadow = [
					"id" => "107",
					"name" => "Shadow",
					"favoriteFood" => "marzipan",
					"favoriteToy" => "slinky",
					"favoriteAnimal" => "lions",
					"age" => 4,
					"adopted" => false,
					"portrait" => "images/shadow.jpg",
				];

				$monsterArray = [$codey, $fragoo, $lima, $reads, $banana, $orangina, $shadow];

				// echo "<ul>";

				// foreach ($monsterArray as $monster) {
				// 	echo "<li>" . $monster["name"] . "</li>";
				// }

				// echo "</ul>";

				// foreach ($monsterArray as $monster) {
				// 	$name = $monster["name"];
				// 	echo "<li class='monster'>" . $name . "</li>";
				// }

				// foreach ($monsterArray as $monster) {
				// 	$id = $monster["id"];
				// 	$name = $monster["name"];
				// 	$favoriteFood = $monster["favoriteFood"];
				// 	$age = $monster["age"];
				// 	$adopted = $monster["adopted"];
				// }


				echo "<ul>";

					foreach ($monsterArray as $monster) {
						$id = $monster["id"];
						$name = $monster["name"];
						$portrait = $monster["portrait"];
						$story = "My favorite food is " . $monster['favoriteFood'] . ". I am " . $monster['age'] . " years old. These are some more of my favorite things:";
						$status = $monster["adopted"];
						$toy = $monster["favoriteToy"];
						$animal = $monster["favoriteAnimal"];

						if ($status == 1) {
							$status = "ADOPTED!";
						} else {
							$status = "Still looking for a home!";
						}

					echo "<li class='monster'>";

					echo "<div class='monster-card' id='" . $id . "'>" . 
								"<div class='pic-button'>" . 
									"<picture class='portrait'>" . 
										"<img src='" . $portrait . "' width='200'>" . 
									"</picture>" . 
									"<a class='status button-voice' href='#'>" . $status . "</a>" .
								"</div>" . 
								"<div class='name-story'>" . 
									"<h2 class='name-voice'>" . $name . "</h2>" . 
									"<p class='story-voice'>" . $story . "</p>" . 
									"<ul class='favorites'>" . 
										"<li class='list-voice'>" . $animal . "</li>" . 
										"<li class='list-voice'>" . $toy . "</li>" .
									"</ul" . 
								"</div>"	. 
							"</div>";

					echo "</li>";
					}

				echo "</ul>";

			?>
		</inner-column>
	</body>
</html>



