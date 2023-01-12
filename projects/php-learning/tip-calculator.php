<head>

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Tip Calculator</title>
	<meta name="description" content="A tip calculator for HTML form and PHP practice." />

</head>
<style>

	body {
		background-color: #6638f0;
		padding: 30px 10px;
	}

	@media (min-width: 500px) {
		body {
			padding: 100px;
		}
	}

	.reading-voice {
		font-family: Courier, monospace;
		font-size: 16px;
		line-height: 1.3;
	}

	.tip-heading {
		font-family: Courier, monospace;
		font-size: clamp(20px, 10vw, 45px);
		color: white;
		text-align: center;
		margin-bottom: 50px;
	}

	.form-fields {
		background-color: white;
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		margin-left: auto;
		margin-right: auto;
		padding: 40px;
		max-width: 300px;
		box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
	}

	@media (min-width: 500px) {
		.form-fields {
			max-width: 400px;
		}
	}

	.form-fields input {
		margin-top: 10px;
		margin-bottom: 10px;
		height: 30px;
	}

	button {
		margin-top: 20px;
		padding: 5px 20px;
	}

	button:hover {
		background-color: rgba(240, 46, 170, 0.7);
	}

	.form-output {
		background-color: white;
		margin-top: 75px;
		margin-left: auto;
		margin-right: auto;
		padding: 40px;
		max-width: 400px;
		box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
	}

	.gentle-reminder {
		font-family: Courier, monospace;
		font-size: clamp(16px, 9vw, 32px);
		color: orange;
		text-align: center;

	}

</style>

<h1 class="tip-heading heyyou-voice">Tip Calculator!</h1>

<?php

$subtotal = 0;
$tipRate = 0;

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
		echo "<p class='gentle-reminder'>Please enter your subtotal.</p>";
	}

	if ($_POST["tipRate"] == NULL) {
		echo "<p class='gentle-reminder'>Please enter your tip percentage.</p>";
	}

};

$tipPercent = $tipRate/100;

$tip = round(($subtotal * $tipPercent), 2);

$total = floatval($tip) + floatval($subtotal);

?>


<form method="POST">
	
	<div class="form-fields reading-voice">

		<label for="">Enter the subtotal of your bill:</label>
		<input name = "subtotal" type="float" minlength="0">

		<label for="">Enter the tip percentage you'd like to leave:</label>
		<input name = "tipRate" type="float">

		<button name="entered" type="submit" class="reading-voice">
			Enter
		</button>

	</div>

	<div class="form-output reading-voice">
		<p>Your subtotal was $<?=$subtotal?></p>
		<p>You left a <?=$tipRate?>% tip.</p>
		<p>Your tip is $<?=$tip?>.</p>
		<p>Your total, incuding the tip, is $<?=$total?>.</p>
	</div>






</form>