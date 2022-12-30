<?php include('header.php'); ?>

			<p class="welcome-text welcome-voice">We are North America's most trusted monster adoption agency. We are committed to finding loving, safe homes for all of our monsters. If you love monsters and think you can provide the kind of nurturing environment that monsters need, contact us today about adopting one of our sweet monsters.</p>
			
			<inner-column>

				<?php

					$codey = [
						"id" => "101",
						"name" => "Codey",
						"favoriteFood" => "pizza",
						"favoriteToy" => "Slinky",
						"favoriteAnimal" => "lions",
						"age" => 7,
						"adopted" => true,
						"portrait" => "images/codey.jpg",
					];

					$fragoo = [
						"id" => "102",
						"name" => "Fragoo",
						"favoriteFood" => "pork chops",
						"favoriteToy" => "Legos",
						"favoriteAnimal" => "tigers",
						"age" => 8,
						"adopted" => false,
						"portrait" => "images/fragoo.jpg",
					];

					$lima = [
						"id" => "103",
						"name" => "Limabean",
						"favoriteFood" => "marzipan",
						"favoriteToy" => "marbles",
						"favoriteAnimal" => "puppies",
						"age" => 4,
						"adopted" => false,
						"portrait" => "images/limabean.jpg",
					];

					$reads = [
						"id" => "104",
						"name" => "Miss Reads-a-Lot",
						"favoriteFood" => "fondue",
						"favoriteToy" => "Scrabble",
						"favoriteAnimal" => "bookworms",
						"age" => 11,
						"adopted" => false,
						"portrait" => "images/miss-reads-a-lot.jpg",
					];

					$banana = [
						"id" => "105",
						"name" => "Mr. Banana",
						"favoriteFood" => "pineapple upsidedown cake",
						"favoriteToy" => "Game Boy",
						"favoriteAnimal" => "cats",
						"age" => 9,
						"adopted" => false,
						"portrait" => "images/mr-banana.jpg",
					];

					$orangina = [
						"id" => "106",
						"name" => "Orangina",
						"favoriteFood" => "buttered toast",
						"favoriteToy" => "Polly Pocket",
						"favoriteAnimal" => "sloths",
						"age" => 6,
						"adopted" => false,
						"portrait" => "images/orangina.jpg",
					];

					$shadow = [
						"id" => "107",
						"name" => "Shadow",
						"favoriteFood" => "chocolate pudding",
						"favoriteToy" => "dressup clothes",
						"favoriteAnimal" => "snakes",
						"age" => 5,
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
								$status = "<p class='status-adopted button-voice'>ADOPTED!</p>";
							} else {
								$status = "<a class='status button-voice' href='adoption-form.php'>Still looking for a home!</a>"; 
							}

						echo "<li class='monster'>";

						echo "<div class='monster-card' id='" . $id . "'>" . 
									"<div class='pic-button'>" . 
										"<picture class='portrait'>" . 
											"<img src='" . $portrait . "' width='200'>" . 
										"</picture>" . 
										$status .
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

<?php include('footer.php'); ?>

