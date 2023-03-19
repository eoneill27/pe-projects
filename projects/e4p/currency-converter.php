
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

<div class="form-fields reading-voice">
	<form action="" method="POST" id="currency-converter">
	
		<fieldset>
			<p class="reading-voice">Choose your conversion:</p>

			<div class="radio">
				<label for="usd">USD to CAD</label>
		      <input type="radio" name="currency" id="usd" value="usd" checked>
    		</div>

    		<div class="radio">
    			<label for="cad">CAD to USD</label>
		      <input type="radio" name="currency" id="cad" value="cad">
    		</div>

			<label id="startAmountLabel" for="startAmount">How much money do you have in <?=$message?>?</label>
			<input name="startAmount" id = "startAmount" class="reading-voice" type="number" step=".01" value="<?=$startAmount?>" required />

			<label for="rate">What is the exchange rate?</label>
			<input name="rate" id="rate" class="reading-voice" type="number" step=".00001" value="<?=$rate?>" required />
		</fieldset>

		<button id="submit" name="submitted" class="reading-voice" type="submit">
			Convert your money
		</button>

		<button id="reset" class="form-button reading-voice" type="button">Reset</button>
	</form>


	<output id="output" class="form-output reading-voice">
		<p class="reading-voice">You started with $<?=$startAmount?> <?=$message?></p>
		<p class="reading-voice">The exchange rate is <?=$rate?></p>
		<p class="reading-voice">$<?=$startAmount?> <?=$message?> at a rate of <?=$rate?> is $<?=$endAmount?> <?=$oppoMessage?>.</p>
	</output>

</div>

<script src="projects/e4p/scripts/currency-converter.js"></script>


