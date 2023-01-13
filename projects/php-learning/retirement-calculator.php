<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Retirement Calculator</title>
		<meta name="description" content="This is a simple retirement calculator, made to practice HTML forms and PHP." />

		<style>
			
			body {
				padding: 10px;
				box-sizing: border-box;
				background-image: url("../../images/resort.jpg");
				background-position: center;
				background-size: stretch;
				background-repeat: no-repeat;
			}

			@media (min-width: 400px) {
				body {
					padding: 30px;
				}
			}

			.heyyou-voice {
				font-family: Avenir, sans-serif;
				font-size: clamp(20px, 10vw, 40px);
				font-weight: 800;
				margin-top: 100px;
				margin-bottom: 50px;
			}

			.reading-voice {
				font-family: Avenir, sans-serif;
				font-size: 16px;
			}

			.heading-link {
				text-decoration: none;
				text-align: center;
				color: white;
			}

			.form-fields, .form-output {
				background-color: lightyellow;
				display: flex;
				flex-direction: column;
				align-items: flex-start;
				padding: 20px;
				margin-left: auto;
				margin-right: auto;
				max-width: 300px;
				box-shadow: lightpink -10px 10px;
			}

			@media (min-width: 500px) {
				.form-fields, .form-output {
					max-width: 400px;
				}
			}

			.form-fields input {
				font-size: 16px;
				margin-top: 10px;
				margin-bottom: 10px;
				height: 30px;
				max-width: 8ch;
				text-align: center;
			}

			input::-webkit-inner-spin-button {
			    -webkit-appearance: none;
			    margin: 0; 
			}

			button {
				margin-top: 20px;
				padding: 5px 20px;
			}

		</style>

	</head>

	<body>

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

		<a href="?" class="heading-link"><h1 class="heyyou-voice">How many years until retirement?</h1></a>
		
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
	</body>



</html>