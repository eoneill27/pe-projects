
<?php include ("functions.php") ?>


<h1 class="attention-voice">Add a meeting</h1>

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

		//This should be PHP data
		$meetings = getData('data/meetings.json');

		//initialize variable - waiting for user input
		$newMeeting = NULL;

		//grab the last object from the $meetings array
		$lastMeeting = end($meetings);
		//target the id key in the last object 
		$lastId = $lastMeeting["id"];
		//add 1 to the last id to make new id
		$nextId = $lastId + 1;

		// echo $nextId;


		$id = $nextId; 
		$host = $_POST["host"];
		$subtitle = $_POST["subtitle"];
		$author = $_POST["author"];
		$genre = $_POST["genre"];
		$isbn = $_POST["isbn"];
		$cover = $_POST["cover"];
		$gala = $_POST["gala"];
		$notes = $_POST["notes"];

		//php associative array
		$newMeeting = [
			"id" => $id,
			"date" => $date,
			"host" => $host,
			"title" => $title,
			"subtitle" => $subtitle,
			"author" => $author,
			"genre" => $genre,
			"isbn" => $isbn,
			"cover" => $cover,
			"gala" => $gala,
			"notes" => $notes,
		];

		// var_dump($newMeeting);
		
		
		//add new meeting assoc. array to $meetings array
		array_push($meetings, $newMeeting);

		//convert $meetings PHP array to JSON and add to JSON file
		saveData('data/meetings.json', $meetings);
	}

?>

<form action="" method="POST" class="card">
	
	<form-field class="">
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="date">Meeting date</label>
		<input class="reading-voice" type="date" id="date" name="date" min="2010-01-01" />
		<?php if ($dateError) { ?>
			<p class="error"><?=$dateError?></p>
		<?php }; ?>

	</form-field>

	<form-field class="radio-field">
		<legend class="reading-voice" style="font-family: Avenir, sans-serif">Meeting host:</legend>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Allison" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Allison">Allison</label>
			</div>
			
			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Ang" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Ang">Ang</label>
			</div>
			
			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Ann" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Ann">Ann</label>
			</div>
			
			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Dana" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Dana">Dana</label>
			</div>
			
			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Emily" required /> 
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Emily">Emily</label>
			</div>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Jenn" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Jenn">Jenn</label>
			</div>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Julia" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Julia">Julia</label>
			</div>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Kimmy" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Kimmy">Kimmy</label>
			</div>

			<div class="radio-button">
				<input class="reading-voice" type="radio" id="host" name="host" value="Robyn" required />
				<label class="reading-voice" style="font-family: Avenir, sans-serif" for="Robyn">Robyn</label>
			</div>
			
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="title">Title</label>
		<input class="reading-voice" type="text" id="title" name="title" />
		<?php if ($titleError) { ?>
			<p class="error"><?=$titleError?></p>
		<?php }; ?>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="subtitle">Subtitle</label>
		<input class="reading-voice" type="text" id="subtitle" name="subtitle"/>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="author">Author</label>
		<input class="reading-voice" type="text" id="author" name="author"/>
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
		<input class="reading-voice" type="number" id="isbn" name="isbn"/>
	</form-field>

	<form-field>
		<label class="reading-voice" style="font-family: Avenir, sans-serif" for="cover">Cover image URL*</label>
		<input class="reading-voice" type="url" id="cover" name="cover" />
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
		<textarea class="reading-voice" style="font-family: Avenir, sans-serif" id="notes" name="notes" rows="5" cols="33"/></textarea>
	</form-field>

	<button class="reading-voice" type="submit" name="add">
		Add meeting
	</button>

	<p class="reading-voice">* Book cover URLs can be obtained with the w3ssley <a class="form-link" href="https://github.com/w3slley/bookcover-api" target="_blank">bookcover-api</a>.</p>
</form>

<p class="attention-voice" style="margin-top: 50px";><?=$message?></p>


