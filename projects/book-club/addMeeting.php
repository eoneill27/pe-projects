<h1 class="heyyou-voice">Add a meeting</h1>

<?php

$date = NULL;
$title = "";
$message = NULL;

$hasDate = false;
$hasTitle = false;

$dateError = false;
$titleError = false;

	if (isset($_POST["add"])) {
		$message = "The meeting has been added!";
	} else {
		$message = NULL;
	}

	if (isset($_POST["add"])) {
		if (isset($_POST["date"])) {
			$date = $_POST["date"];

			if ($date == true) {
				$hasDate = true;
			} else {
				$dateError = "Please enter the meeting date.";
			}
		}

		if (isset($_POST["title"])) {
			$title = $_POST["title"];

			if ( strlen($title > 0) ) {
				$hasTitle = true;
			} else {
				$titleError = "Please enter the book title.";
			}
		}
		}

		

?>

<form action="" method="POST">
	
	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="date">Meeting date</label>
		<input class="reading-voice" type="date" id="date" name="date" min="2010-01-01" />
		<?php if ($dateError) { ?>
			<p class="error"><?=$dateError?></p>
		<?php }; ?>

	</form-field>

	<form-field class="radio-field">
		<legend class="reading-voice" style="font-family: Avenir, sans-serif">Meeting host:</legend>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="allison" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="ang">Allison</label>
			</div>
			
			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="ang" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="allison">Ang</label>
			</div>
			
			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="ann" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="ann">Ann</label>
			</div>
			
			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="dana" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="dana">Dana</label>
			</div>
			
			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="emily" required /> 
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="emily">Emily</label>
			</div>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="jenn" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Jenn">Jenn</label>
			</div>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="julia" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="julia">Julia</label>
			</div>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="kimmy" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="kimmy">Kimmy</label>
			</div>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Robyn" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Robyn">Robyn</label>
			</div>
			
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="title">Title</label>
		<input type="text" id="title" name="title" />
		<?php if ($titleError) { ?>
			<p class="error"><?=$titleError?></p>
		<?php }; ?>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="subtitle">Subtitle</label>
		<input type="text" id="subtitle" name="subtitle"/>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="author">Author</label>
		<input type="text" id="author" name="author"/>
	</form-field>

	<form-field class="radio-field">
		<legend class="reading-voice" style="font-family: Avenir, sans-serif">Genre:</legend>
		<input class="reading-voice" type="radio" id="genre" name="genre" value="fiction"/>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="fiction">Fiction</label>

		<input class="reading-voice" type="radio" id="genre" name="genre" value="non-fiction"/>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="non-fiction">Non-fiction</label>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="isbn">ISBN</label>
		<input type="number" id="isbn" name="isbn"/>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="cover">Cover image URL*</label>
		<input type="url" id="cover" name="cover" />
	</form-field>

	<form-field class="radio-field">
		<legend class="reading-voice" style="font-family: Avenir, sans-serif">Gala?</legend>

			<input class="reading-voice" type="radio" id="yes" name="gala" value="yes" required />
			<label class="reading-voice" style="font-family: Avenir, sans-serif" for="yes">yes</label>

			<input class="reading-voice" type="radio" id="no" name="gala" value="no" checked required />
			<label class="reading-voice" style="font-family: Avenir, sans-serif" for="no">no</label>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="notes">Notes</label>
		<textarea id="notes" name="notes" rows="5" cols="33"/></textarea>
	</form-field>

	<button class="reading-voice" type="submit" name="add">
		Add meeting
	</button>

	<p class="reading-voice">* Book cover URLs can be obtained with the w3ssley <a class="form-link" href="https://github.com/w3slley/bookcover-api" target="_blank">bookcover-api</a>.</p>
</form>

<p class="attention-voice" style="margin-top: 50px";><?=$message?></p>