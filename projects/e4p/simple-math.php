


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
		$validateDivide = "You can't divide by 0. Please enter a number other than 0.";
	} else {
		$divide = $number1 / $number2;
		$validateDivide = NULL;
	}


	?>

	<a href="?"><h1 class="attention-voice">Simple calculator</h1></a>

	<form method="POST" action="">
		<div class="form-fields reading-voice">
			<label for="">Number 1</label>
			<input class="reading-voice" name="number1" id="num1" type="number" value="<?=$number1?>" step="0.0000001"/>

			<label for="">Number 2</label>
			<input class="reading-voice" name="number2" id="num2" type="number" value="<?=$number2?>" step="0.0000001"/>

			<button class="form-button reading-voice" name="submitted" type="submit">
				Submit
			</button>
			<button id="reset-button" class="form-button reading-voice" type="button">Reset</button>


		</div>
	</form>

<!-- JS output -->

	<output class="form-fields reading-voice" style="display: none">

	</output>


<!-- php output  -->

	<div class="form-output php-output reading-voice" style="display: none">
		<h2 class="info-voice">RESULTS:</h2> 
		<p>Number 1 + Number 2 = <?=$add?></p>
		<p>Number 1 - Number 2 = <?=$subtract?></p> 
		<p>Number 1 * Number 2 = <?=$multiply?></p> 
		 <p>Number 1 / Number 2 = <?=$divide?></p>
		 <p><?=$validateDivide?></p>

 	</div>

<script src="projects/e4p/scripts/simple-math.js"></script>













