
<inner-column>

	<a href="?"><h1 class="attention-voice">Tip Calculator</h1></a>

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


	<form method="POST">
		
		<div class="form-fields reading-voice">

			<div class="sub-fields">
				<label for="">Enter the subtotal of your bill:</label>
				<div class="input-fields">
					<span>$</span>
					<input class="reading-voice" name = "subtotal" type="number" step="0.01" value="<?=$subtotal?>" />
					<p><?=$validateSub?></p>
				</div>
			</div>

			<div class="tip-fields">
				<label for="">Enter the tip percentage you'd like to leave:</label>
				<div class="input-fields">
					<input class="reading-voice" name = "tipRate" type="number" step="0.01" value="<?=$tipRate?>" />
					<span>%</span>
					<p><?=$validateTip?></p>
				</div>
			</div>

			<button name="entered" type="submit" class="reading-voice">
				Enter
			</button>

		</div>

		<div class="form-output reading-voice">
			<p>Your subtotal was <span class="result">$<?=$subtotal?></span>.</p>
			<p>You left a <span class="result"><?=$tipRate?>%</span> tip.</span></p>
			<p>Your tip is <span class="result">$<?=$tip?></span>.</p>
			<p>Your total, incuding the tip, is <span class="result">$<?=$total?></span>.</p>
		</div>

	</form>
</inner-column>

