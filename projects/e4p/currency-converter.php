<?php include('header.php'); ?>

<inner-column>

<?php

	$startAmount = 0;
	$rate = 0;

	$message = "U.S. dollars";
	$oppoMessage = "Canadian dollars";

	if (isset($_POST["currency"])) {

		$currency = $_POST["currency"];

		if ($currency == "usd") {
			$message = "U.S. dollars"; 
			$oppoMessage = "Canadian dollars";
		} else {
			$message = "Canadian dollars";
			$oppoMessage = "U.S. dollars";
		}
	}

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

<a href="?"><h1 class="attention-voice">Currency Converter</h1></a>

<form action="" method="POST">
	
	<div class="form-fields reading-voice ">
		
		<fieldset>
			<legend><h2 class="info-voice">Choose your conversion</h2></legend>

			<div>
				<label for="usd">USD to CAD</label>
		      <input type="radio" name="currency" id="usd" value="usd" checked>
    		</div>

    		<div>
    			<label for="cad">CAD to USD</label>
		      <input type="radio" name="currency" id="cad" value="cad">
    		</div>
		</fieldset>
		<label for="startAmount">How much money do you have in <?=$message?>?</label>
		<input name="startAmount" class="reading-voice" type="number" step=".01" value="<?=$startAmount?>" required />

		<label for="rate">What is the exchange rate?</label>
		<input name="rate" class="reading-voice" type="number" step=".00001" value="<?=$rate?>" required />

		<button name="submitted" class="reading-voice" type="submit">
			Convert your money
		</button>
	</div>

	<div class="form-output">
		<p class="reading-voice">You started with $<?=$startAmount?> <?=$message?></p>
		<p class="reading-voice">The exchange rate is <?=$rate?></p>
		<p class="reading-voice"><?=$startAmount?> <?=$message?> at a rate of <?=$rate?> is <?=$endAmount?> <?=$oppoMessage?>.</p>
	</div>

</form>

</inner-column>



<?php include('footer.php'); ?>