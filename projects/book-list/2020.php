<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$O0001 = bookForm(10575);


	$books = [$O0001, $O0002, $O0003, $O0004, $O0005, $O0006, $O0007, $O0008, $O0009, $O0010, $O0011, $O0012, $O0013, $O0014, $O0015, $O0016, $O0017, $O0018, $O0019, $O0020, $O0021, $O0022, $O0023, $O0024, $O0025, $O0026, $O0027, $O0028, $O0029, $O0030, $O0031, $O0032, $O0033, $O0034, $O0035, $O0036, $O0037, $O0038, $O0039, $O0040, $O0041, $O0042, $O0043, $O0044, $O0045, $O0046];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2020</h2>

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
