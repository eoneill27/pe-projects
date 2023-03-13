


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
		
		<form action="" method="POST">
			<div class="form-fields reading-voice">
		
				<label for="age">How old are you?</label>
				<input name="age" class="reading-voice" type="number" required>

				<label for="retirementAge">How old do you want to be when you retire?</label>
				<input name="retirementAge" class="reading-voice" type="number" required>

				<button class="reading-voice" type="submit" name="submitted">
					Do the math
				</button>

			</div>

			<div class="form-output">
				<p class="reading-voice">You are <?=$age?> years old.</p>
				<p class="reading-voice">You want to retire at age <?=$retirementAge?></p>
				<p class="reading-voice">You can retire in <?=$retirementYear?>.</p>
				<p class="reading-voice"><?=$message?></p>
			</div>
		</form>


