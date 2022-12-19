<?php 

	$noun = "tugboat";
	$pluralNounOne = "wolverines";
	$verbPresentOne = "skip";
	$verbPresentTwo = "flock";
	$bodyPartPlural = "eyeballs";
	$adjectiveOne = "dashing";
	$pluralNounTwo = "tulips";
	$adjectiveTwo = "hilarious";

	echo "<p>Today, every student has a computer small enough to fit into their " . $noun . ". You can solve any math problem by simply pushing the computer's little " . $pluralNounOne . ".</p>

		<p>Computers can add, multiply, divide, and " . $verbPresentOne . ". They can also " . $verbPresentTwo . " better than a human.</p>

		<p>Some computers have their own " . $bodyPartPlural . ". Others have a/an " . $adjectiveOne . " screen that shows all kinds of " . $pluralNounTwo . " and " . $adjectiveTwo . " figures.</p>";

?>

<hr>

<p>Today, every student has a computer small enough to fit into their <?php echo $noun ?>. You can solve any math problem by simply pushing the computer's little <?php echo $pluralNounOne ?>.</p>

<p>Computers can add, multiply, divide, and <?php echo $verbPresentOne ?>. They can also <?php echo $verbPresentTwo ?> better than a human.</p>

<p>Some computers have their own <?php echo $bodyPartPlural ?>. Others have an <?php echo $adjectiveOne ?> screen that shows all kinds of <?php echo $pluralNounTwo ?> and <?php echo $adjectiveTwo ?> figures.</p>

<hr>

<p>Today, every student has a computer small enough to fit into their <?=$noun?>. You can solve any math problem by simply pushing the computer's little <?=$pluralNounOne?>.</p>

<p>Computers can add, multiply, divide, and <?=$verbPresentOne?>. They can also <?=$verbPresentTwo?> better than a human.</p>

<p>Some computers have their own <?=$bodyPartPlural?>. Others have an <?=$adjectiveOne?> screen that shows all kinds of <?=$pluralNounTwo?> and <?=$adjectiveTwo?> figures.</p>