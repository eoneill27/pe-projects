<?php

	$adjective1 = NULL;
	$verb1 = NULL;
	$adjective2 = NULL;
	$noun1 = NULL;
	$verb2 = NULL;
	$adjective3 = NULL;
	$noun2 = NULL;
	$adjective4 = NULL;
	$adjective5 = NULL;
	$noun3 = NULL;
	$noun4 = NULL;

	if (isset($_POST["submitted"])) {

		if (isset($_POST["adjective1"])) {
			$adjective1 = strtolower($_POST["adjective1"]);
		}

		if (isset($_POST["verb1"])) {
			$verb1 = strtolower($_POST["verb1"]);
		}

		if (isset($_POST["adjective2"])) {
			$adjective2 = strtolower($_POST["adjective2"]);
		}

		if (isset($_POST["noun1"])) {
			$noun1 = strtolower($_POST["noun1"]);
		}

		if (isset($_POST["verb2"])) {
			$verb2 = strtolower($_POST["verb2"]);
		}

		if (isset($_POST["adjective3"])) {
			$adjective3 = strtolower($_POST["adjective3"]);
		}

		if (isset($_POST["noun2"])) {
			$noun2 = strtolower($_POST["noun2"]);
		}

		if (isset($_POST["adjective4"])) {
			$adjective4 = strtolower($_POST["adjective4"]);
		}

		if (isset($_POST["adjective5"])) {
			$adjective5 = strtolower($_POST["adjective5"]);
		}

		if (isset($_POST["noun3"])) {
			$noun3 = strtolower($_POST["noun3"]);
		}

		if (isset($_POST["noun4"])) {
			$noun4 = strtolower($_POST["noun4"]);
		}

			$message = "Our school cafeteria has really <span style='color: red';>" . $adjective1 . "</span> food. Just thinking about it makes my stomach <span style='color: red';>" . $verb1 . "</span>. The spaghetti is <span style='color: red';>" . $adjective2 . "</span> and tastes like <span style='color: red';>" . $noun1 . "</span>. One day, I swear one of my meatballs started to <span style='color: red';>" . $verb2 . "</span>! The turkey tacos are totally <span style='color: red';>" . $adjective3 . "</span> and look kind of like old <span style='color: red';>" . $noun2 . "</span>. My friend Dana actually likes the meatloaf, even though it's <span style='color: red';>" . $adjective4 . "</span> and <span style='color: red';>" . $adjective5 . "</span>. I call it 'mystery meatloaf' and think it's really made out of <span style='color: red';>" . $noun3 . "</span>. My dad said he'd make my lunches, but the first day, he made me a sandwich out of <span style='color: red';>" . $noun4 . "</span> and peanut butter! I think I'd rather take my chances with the cafeteria!";
		} else {
			$message = NULL;
	}

	if (isset($_POST["reset"])) {
		$_POST["input"] = NULL;
	}

?>

<a class="form-title" href="?"><h1 class="attention-voice">Mad Lib</h1></a>

<div class="form-fields reading-voice">
	<form action="" method="post" id="madlib-form">
		
		<fieldset>

			<label for="adjective1">Enter an adjective</label>
			<input class="reading-voice" type="text" name="adjective1" id="adjective1" value="<?=$adjective1?>" required>

			<label for="verb1">Enter a verb</label>
			<input class="reading-voice" type="text" name="verb1" id="verb1" value="<?=$verb1?>" required>

			<label for="adjective2">Enter another adjective</label>
			<input class="reading-voice" type="text" name="adjective2" id="adjective2" value="<?=$adjective2?>" required>

			<label for="noun1">Enter a noun</label>
			<input class="reading-voice" type="text" name="noun1" id="noun1" value="<?=$noun1?>" required>

			<label for="verb2">Enter another verb</label>
			<input class="reading-voice" type="text" name="verb2" id="verb2" value="<?=$verb2?>" required>

			<label for="adjective3">Go on - another adjective!</label>
			<input class="reading-voice" type="text" name="adjective3" id="adjective3" value="<?=$adjective3?>" required>

			<label for="noun2">And now another noun</label>
			<input class="reading-voice" type="text" name="noun2" id="noun2" value="<?=$noun2?>" required>

			<label for="adjective4">Another adjective. Seriously!</label>
			<input class="reading-voice" type="text" name="adjective4" id="adjective4" value="<?=$adjective4?>" required>

			<label for="adjective5">Ok! Last adjective, I swear!</label>
			<input class="reading-voice" type="text" name="adjective5" id="adjective5" value="<?=$adjective5?>" required>

			<label for="noun3">Enter another noun</label>
			<input class="reading-voice" type="text" name="noun3" id="noun3" value="<?=$noun3?>" required>

			<label for="noun4">Almost done. One more noun.</label>
			<input class="reading-voice" type="text" name="noun4" id="noun4" value="<?=$noun4?>" required>
		</fieldset>

		<button id="submit" class="reading-voice" type="submit" name="submitted">
			Make the Mad Lib
		</button>

		<button id="formReset" class="reading-voice" type="button" name="reset">
			Reset
		</button>
	</form>

	<output class="form-output">
		<p class="reading-voice">
			<?=$message?>
		</p>
	</output>

</div>



<script src="projects/e4p/scripts/mad-lib.js"></script>
