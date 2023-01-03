
<h1>Awesome Monster Generator!</h1>

<?php

	function monsterGenerator($id, $name, $age, $favoriteFood, $favoriteToy, $favoriteAnimal, $adopted, $portrait) {

		echo "<h2>Create a monster:</h2>";

		echo "<ul>
					<li>ID = " . $id . "</li>
					<li>Name = " . $name . "</li>
					<li>Age = " . $age . "</li>
					<li>Favorite Food = " . $favoriteFood . "</li>
					<li>Favorite Toy = " . $favoriteToy . "</li>
					<li>Favorite Animal = " . $favoriteAnimal . "</li>
					<li>Adoption Status = " . $adopted . "</li>
				</ul>
				<picture>
					<img src='$portrait' width=300>
				</picture>";
	}

	monsterGenerator(101, "Codey", 4, "mac & cheese", "legos", "dog", "adopted", "https://peprojects.dev/images/square.jpg");

?>

<?php

	function monsterMaker($name, $age, $favoriteFood) {
		$monster = [
			"name" => $name,
			"age" => $age,
			"favoriteFood" => $favoriteFood,	
		];

		return $monster;
		// this means that whatever variable you name when running function will become $monster - $sally becomes $monster - returned value is the object $monster, which $sally is now pointing to.
	}

	$sally = monsterMaker("Sally", 10, "pickles");
	$lally = monsterMaker("Lally", 8, "oranges");
	$pally = monsterMaker("Pally", 7, "grapes");
	$hally = monsterMaker("Hally", 4, "cookies");
	$tally = monsterMaker("Tally", 12, "crackers");

	$monsters = [$sally, $lally, $pally, $hally, $tally];

?>

<?php foreach($monsters as $monster) { ?>
		<li class='monster'>
			<monster-card>
				<h2 class='name'><?=$monster["name"];?></h2>
				<p>I am <?=$monster["age"];?> years old</p>
				<p>My favorite food is <?=$monster["favoriteFood"];?>.</p>
			</monster-card>
		</li>

<?php } ?>







