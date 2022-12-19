<?php
	echo "Emily!";
?>

<?php
	$firstName = "Emily";
	$lastName = "O'Neill";

	echo "$firstName $lastName"
?>

<p>
	<?php
		echo 45;
	?>
</p>

<p>
	<?php
		echo "45 45";
	?>
</p>

<p>
	<?php
		echo 45 + 45;
	?>
</p>

<p>
	<?php
		echo "Emily 40";
	?>
</p>

<p>
	<?php
		echo "Emily " . 32;
	?>
</p>

<p>
	<?php
		$name = "Emily";
		$truth = "rad";

		echo "$name" . " is " . "$truth";

		echo "<p>" . $name . " 39 </p>";
	?>
</p>

<p>
	<?php
		echo "It snowed all day yesterday. The world is covered in snow. " . (2 + 7) . " I hope the snow melts by Friday.";
	?>
</p>

<p>
	<?php
		$noun = "snow";

		echo "It " . $noun . "ed all day yesterday. The world is covered in " . $noun . ". I hope the " . $noun . " melts by Friday.";
	
	?>
</p>

<p>
	<?php
		$url = "https://www.nytimes.com";

		echo "<a href='" . $url . "'>New York Times</a>";
	?>
</p>

<?php
	
	$myVariable = "Hello";

	echo $myVariable;

	echo "<p>" . $myVariable . "</p>";
?>

<p><?php echo $myVariable; ?></p>

<p><?=$myVariable?></p>
