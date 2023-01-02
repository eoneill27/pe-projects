<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

$P0001 = bookForm();


	$books = [$P0001, $P0002, $P0003, $P0004, $P0005, $P0006, $P0007, $P0008, $P0009, $P0010, $P0011, $P0012, $P0013, $P0014, $P0015, $P0016, $P0017, $P0018, $P0019, $P0020, $P0021, $P0022, $P0023, $P0024, $P0025, $P0026, $P0027, $P0028, $P0029, $P0030, $P0031, $P0032, $P0033, $P0034, $P0035, $P0036, $P0037, $P0038, $P0039, $P0040, $P0041, $P0042, $P0043, $P0044, $P0045, $P0046, $P0047, $P0048, $P0049, $P0050, $P0051, $P0052, $P0053, $P0054, $P0055, $P0056, $P0057, $P0058];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2021</h2>

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
