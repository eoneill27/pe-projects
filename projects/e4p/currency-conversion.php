<?php include("header.php"); ?>

<?php

	$startAmount = 0;
	$rate = 0;

	if (isset($_POST["submitted"])) {

		if (isset($_POST["startAmount"])) {
			$startAmount = $_POST["startAmount"];
		}

		if (isset($_POST["rate"])) {
			$rate = $_POST["rate"];
		}
	}

	$endAmount = $startAmount * $rate;

	$endAmount = round($endAmount, 2);
?>


<form action="" method="POST">
	
	<div class="form-fields reading-voice ">
		
		<label for="startAmount">How much money do you have in U.S. dollars?</label>
		<input name="startAmount" class="reading-voice" type="number" step=".01" value="<?=$startAmount?>" required />

		<label for="rate">What is the exchange rate?</label>
		<input name="rate" class="reading-voice" type="number" step=".00001" value="<?=$rate?>" required />

		<button name="submitted" class="reading-voice" type="submit">
			Convert your money
		</button>
	</div>

	<div class="form-output">
		<p class="reading-voice">You started with $<?=$startAmount?></p>
		<p class="reading-voice">The exchange rate is <?=$rate?></p>
		<p class="reading-voice"><?=$startAmount?> U.S. dollars at a rate of <?=$rate?> is <?=$endAmount?> Canadian dollars.</p>
	</div>

</form>





<?php include("footer.php"); ?>