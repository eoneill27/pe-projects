
		<?php
			$age = NULL;
			$retirementAge = NULL;
			$message = NULL;

			if (isset($_POST["submitted"])) {

				if (isset($_POST["age"])) {
					if ($_POST["age"] >= 0) {
						$age = $_POST["age"];
					}
				}

				if (isset($_POST["retirementAge"])) {
					if ($_POST["retirementAge"] >= 0) {
						$retirementAge = $_POST["retirementAge"];	
					}	
				}
			};

			$year = date("Y");

			$yearsLeft = $retirementAge - $age;
			$retirementYear = $year + $yearsLeft;

			if ($yearsLeft <= 0) {
				$message = "What are you doing?? You could have retired already!";
			} else {
				$message = "You have $yearsLeft years left before you can retire.";
			}

		?>

		<a href="?" class="heading-link"><h1 class="attention-voice">How many years until retirement?</h1></a>
		
		<div class="reading-voice form-fields">
			<h2 id="test" style="display: none; color: red"></h2>

			<fieldset class="code-toggles">
				<label for="php-toggle" >PHP</label>
				<input type="radio" id="php-toggle" name="code-toggle" checked>

				<label for="js-toggle" >JavaScript</label>
				<input type="radio" id="js-toggle" name="code-toggle">
			</fieldset>

			<form action="" method="POST" id="retirement-form">
				<label for="age">How old are you?</label>
				<input id="current-age" name="age" class="reading-voice" type="number" required>

				<label for="retirementAge">How old do you want to be when you retire?</label>
				<input id="retire-age" name="retirementAge" class="reading-voice" type="number" required>

				<button class="reading-voice" type="submit" name="submitted" id="submit" style="display: none">
					Do the math
				</button>
				<button class="reading-voice" type="button" id="js-submit" style="display: none">
					Do the math
				</button>
				<button class="reading-voice" type="button" name="reset" id="reset">
					Reset
				</button>
			</form>	
		</div>
		

<!-- JS output -->
		<output id="js-output" class="form-output" style="display: none"></output>

<!-- PHP output  -->
		<output id="php-output" class="form-output" style="display: none">
			<p class="reading-voice">You are <?=$age?> years old.</p>
			<p class="reading-voice">You want to retire at age <?=$retirementAge?></p>
			<p class="reading-voice">You can retire in <?=$retirementYear?>.</p>
			<p class="reading-voice"><?=$message?></p>
		</output>

<script src="projects/e4p/scripts/retirement-calculator.js"></script>