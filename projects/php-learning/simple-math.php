<style>
	body {
		padding: 30px;
		background-color: black;
	}

	h1 {
		font-family: Courier, monospace;
		font-size: clamp(16px, 10vw, 40px);
		color: lime;
		text-align: center;
	}

	.attention-voice {
		font-family: Courier, monospace;
		font-size: 24px;
	}
	.reading-voice {
		font-family: Courier, monospace;
		font-size: 16px;
	}

	.form-fields, .form-output {
		background-color: white;
		display: flex;
		flex-direction: column;
		max-width: 300px;
		padding: 40px;
		margin-left: auto;
		margin-right: auto;
		box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
	}

	.form-output {
		margin-top: 30px;
	}

	.form-fields label {
		margin-top: 15px;
	}
	.form-fields input {
		max-width: 20ch;
		margin-top: 5px;
	}

	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0; 
	}


	@media (min-width: 500px) {

		.form-fields, .form-output {
			max-width: 450px;
		}
	}



	button {
		margin-top: 30px;
		padding: 5px 30px;
		max-width: 120px;
	}

</style>

<?php

$number1 = 0;
$number2 = 0;

if (isset($_POST["submitted"])) {

	if (isset($_POST["number1"])) {
		$number1 = $_POST["number1"];
	}

	if (isset($_POST["number2"])) {
		$number2 = $_POST["number2"];
	}
}

$add = $number1 + $number2;

$subtract = $number1 - $number2;

$multiply = $number1 * $number2;

if ($number2 == 0) {
	$divide = NULL;
	$validateDivide = "You can't divide by 0. Please enter a number greater than 0.";
} else {
	$divide = $number1 / $number2;
	$validateDivide = NULL;
}


?>

<h1>Simple calculator</h1>

<form method="POST" action="">
	<div class="form-fields reading-voice">
		<label for="">Number 1</label>
		<input name="number1" type="number" step="0.000000001"/>

		<label for="">Number 2</label>
		<input name="number2" type="number" step="0.000000001"/>

		<button name="submitted" type="submit">
			Submit
		</button>
	</div>

	<div class="form-output reading-voice">
		<h2 class="attention-voice">RESULTS:</h2>
		<p>Number 1 + Number 2 = <?=$add?></p>
		<p>Number 1 - Number 2 = <?=$subtract?></p>
		<p>Number 1 * Number 2 = <?=$multiply?></p>
		<p>Number 1 / Number 2 = <?=$divide?></p>
		<p><?=$validateDivide?></p>

	</div>



</form>





















