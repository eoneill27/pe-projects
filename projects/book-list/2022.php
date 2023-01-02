<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

$Q0001 = bookForm();


	$books = [$Q0001, $Q0002, $Q0003, $Q0004, $Q0005, $Q0006, $Q0007, $Q0008, $Q0009, $Q0010, $Q0011, $Q0012, $Q0013, $Q0014, $Q0015, $Q0016, $Q0017, $Q0018, $Q0019, $Q0020, $Q0021, $Q0022, $Q0023, $Q0024, $Q0025, $Q0026, $Q0027, $Q0028, $Q0029, $Q0030, $Q0031, $Q0032];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2022</h2>

	<ul class="book-cards">

	<?php foreach ($books as $book) { 

		if ($book["recommended"] == 1) {
				$book["recommended"] = "Recommended!";
		} else {
				$book["recommended"] = ""; 
		}
	?>

		<li class="book">
			<book-card>
				<h3 class="title-voice"><?=$book["title"];?></h3>
				<h4 class="author-voice">by <?=$book["author"];?></h4>
				<p class="genre-voice"><?=$book["genre"];?></p>
				<p class="review-voice"><?=$book["recommended"];?></p>

			</book-card>
		</li>


	<?php } ?>

</inner-column>

<?php include('footer.php'); ?>
