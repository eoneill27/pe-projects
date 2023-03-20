	<?php

	$subtotal = 0;
	$tipRate = 0;
	$validateSub = NULL;
	$validateTip = NULL;

	if (isset($_POST["entered"])) {

		if (isset($_POST["subtotal"])) {
			if ($_POST["subtotal"] >= 0) {
				$subtotal = $_POST["subtotal"];
			}
		}

		if (isset($_POST["tipRate"])) {
			if ($_POST["tipRate"] >= 0) {
				$tipRate = $_POST["tipRate"];
			}
		}

		if ($_POST["subtotal"] == NULL) {
			$validateSub = "<p class='gentle-reminder'>Please enter your subtotal.</p>";
		} else {
			$validateSub = NULL;
		}

		if ($_POST["tipRate"] == NULL) {
			$validateTip = "<p class='gentle-reminder'>Please enter your tip percentage.</p>";
		} else {
			$validateTip = NULL;
		}

	};

	$tipPercent = $tipRate/100;

	$tip = round(($subtotal * $tipPercent), 2);

	$total = floatval($tip) + floatval($subtotal);

	?>

<h2 class="form-subtitle attention-voice">Tip Calculator</h2>

	<div class="form-fields reading-voice">
	
		<form method="POST" id="tip-form">
			<fieldset>
				<label for="subtotal">Enter the subtotal of your bill:</label>
				<div class="input-fields">
					<span>$</span>
					<input id="subtotal" class="reading-voice" name="subtotal" type="number" step="0.01" value="<?=$subtotal?>" />
					<p><?=$validateSub?></p>
				</div>

				<div class="tip-fields">
					<label for="tipRate">Enter the tip percentage you'd like to leave:</label>
					<div class="input-fields">
						<input id="tipRate" class="reading-voice" name = "tipRate" type="number" step="0.01" value="<?=$tipRate?>" />
						<span>%</span>
						<p><?=$validateTip?></p>
				</div>
			</fieldset>

			<button id="submit" name="entered" type="submit" class="reading-voice">
				Enter
			</button>

			<button class="reading-voice" type="button" name="reset" id="reset">
				Reset
			</button>
		
		</form>

		<output id="output" class="form-output reading-voice">
			<p>Your subtotal was <span class="result">$<?=$subtotal?></span>.</p>
			<p>You left a <span class="result"><?=$tipRate?>%</span> tip.</span></p>
			<p>Your tip is <span class="result">$<?=$tip?></span>.</p>
			<p>Your total, incuding the tip, is <span class="result">$<?=$total?></span>.</p>
		</output>
		
	</div>

	<script src="projects/e4p/scripts/tip-calculator.js"></script>

