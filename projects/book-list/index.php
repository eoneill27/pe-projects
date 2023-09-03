<?php include('header.php'); ?>

<?php

$title = "";
$author = "";
$genre = "";
$year = 0;
$recommend = null;

if (isset($_POST["submitted"])) {
	if (isset($_POST["title"])) {
		$title = $_POST["title"];
	} 

	if (isset($_POST["author"])) {
		$author = $_POST["author"];
	}

	if (isset($_POST["genre"])) {
		$genre = $_POST["genre"];
	} 

	if (isset($_POST["year"])) {
		$year = $_POST["year"];
	} else {
		echo "Please enter the year.";
	}

	if (isset($_POST["title"])) {
		$title = $_POST["title"];
	}
	if (isset($_POST["recommend"])) {
		$recommend = true;
	}
}

$bookArray = [$title, $author, $genre, $year, $recommend];

?>

<inner-column>

	<form method="POST" action="">

		<p class="title-voice">What book did you just finish?</p>

		<div class="form-fields author-voice">

			<label for="">Title</label>
			<input name="title" type="text" size="20ch"/>

			<label for="">Author</label>
			<input name="author" type="text" size="20ch" />

			<label for="">Genre</label>
			<input name="genre" type="text" size="20ch" />

			<label for="">Year read</label>
			<input name="year" type="number" size="10ch" />

			<div class="recommend-check">
				<legend>Do you recommend this book?</legend>
				<input name="recommend" type="checkbox" id="yes" value="yes" />
				<label for="yes">Yes</label>
			</div>

			<button name="submitted" type="submit" class="author-voice">
				Submit
			</button>

		</div>
	</form>

<p class="author-voice output-array">Here's what you just entered:<br/> <span class="genre-voice"><?=print_r($bookArray)?> </span></p>

</inner-column>





<?php include('footer.php'); ?>




