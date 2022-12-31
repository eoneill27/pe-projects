<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$K0001 = bookForm(10425, "Being Mortal", "Atul Gawande", "non-fiction", 2016, true);
	$K0002 = bookForm(10426, "Slade House", "David Mitchell", "fiction", 2016, true);
	$K0003 = bookForm(10427, "Black Flags: The Rise of ISIS", "Joby Warrick", "non-fiction", 2016, true);
	$K0004 = bookForm(10428, "The Memory Painter", "Gwendolyn Womack", "fiction", 2016, false);
	$K0005 = bookForm(10429, "Look Back All the Green Valley", "Fred Chappell", 
		"fiction", 2016, false);
	$K0006 = bookForm(10430, "Cocaine Blues", "Kerry Greenwood", "fiction--mystery", 2016, false);
	$K0007 = bookForm(10431, "Career of Evil", "Robert Galbraith", "fiction--mystery", 2016, true);
	$K0008 = bookForm(10432, "The Heart is a Lonely Hunter", "Carson McCullers", "fiction--classic", 2016, true);
	$K0009 = bookForm(10433, "Alice's Adventures Under Ground", "Lewis Carroll", "fiction--children's", 2016, false);
	$K0010 = bookForm(10434, "The Watchmaker of Filigree Street", "Natasha Pulley", "fiction--speculative", 2016, true);
	$K0011 = bookForm(10435, "Alice's Adventures in Wonderland Decoded: The Full Text of Lewis Carroll's Novel with its Many Hidden Meanings Revealed", "David Day", "non-fiction", 2016, false);
	$K0012 = bookForm(10436, "The Last Policeman", "Ben H. Winters", "fiction--mystery", 2016, true);
	$K0013 = bookForm(10437, "Countdown City", "Ben H. Winters", "fiction--mystery", 2016, false);
	$K0014 = bookForm(10438, "Notes from a Small Island", "Bill Bryson", "non-fiction--memoir", 2016, false);
	$K0015 = bookForm(10439, "Die Trying", "Lee Child", "fiction--thriller", 2016, false);
	$K0016 = bookForm(10440, "The Silver Star", "Jeannette Walls", "fiction", 2016, false);
	$K0017 = bookForm(10441, "The Shepherd's Life: Modern Dispatches from an Ancient Landscape", "James Rebanks", "non-fiction", 2016, false);
	$K0018 = bookForm(10442, "Cruddy", "Lynda Barry", "fiction", 2016, true);
	$K0019 = bookForm(10443, "All the Single Ladies: Unmarried Women and the Rise of an Independent Nation", "Rebecca Traister", "non-fiction", 2016, true);
	$K0020 = bookForm(10444, "Mothering Sunday", "Graham Swift", "fiction", 2016, false);
	$K0021 = bookForm(10445, "World of Trouble", "Ben H. Winters", "fiction--mystery", 2016, false);
	$K0022 = bookForm(10446, "A Mother's Reckoning: Living in the Aftermath of Tragedy", "Sue Klebold", "non-fiction--memoir", 2016, false);
	$K0023 = bookForm(10447, "A Natural History of the Senses", "Diane Ackerman", "non-fiction", 2016, false);
	$K0024 = bookForm(10448, "The Second Life of Nick Mason", "Steve Hamilton", "fiction", 2016, false);
	$K0025 = bookForm(10449, "The Panic Virus: A True Story of Medicine, Science, and Fear", "Seth Mnookin", "non-fiction--science", 2016, false);
	$K0026 = bookForm(10450, "The Regional Office is Under Attack!", "Manuel Gonzales", "fiction", 2016, true);
	$K0027 = bookForm(10451, "Cannery Row", "John Steinbeck", "fiction--classic", 2016, true);
	$K0028 = bookForm(10452, "The Book of Strange New Things", "Michael Faber", "fiction--science fiction", 2016, false);
	$K0029 = bookForm(10453, "The Queen of the Tearling", "Erika Johansen", "fiction--fantasy", 2016, true);
	$K0030 = bookForm(10454, "Sweet Thursday", "John Steinbeck", "fiction--classic", 2016, true);
	$K0031 = bookForm(10455, "The Invasion of the Tearling", "Erika Johansen", "fiction--fantasy", 2016, true);
	$K0032 = bookForm(10456, "The Girls", "Emma Cline", "fiction", 2016, true);
	$K0033 = bookForm(10457, "The Moonstone", "Wilkie Collins", "fiction--mystery", 2016, true);
	$K0034 = bookForm(10458, "Homegoing", "Yaa Gyasi", "fiction", 2016, true);

	$books = [$K0001, $K0002, $K0003, $K0004, $K0005, $K0006, $K0007, $K0008, $K0009, $K0010, $K0011, $K0012, $K0013, $K0014, $K0015, $K0016, $K0017, $K0018, $K0019, $K0020, $K0021, $K0022, $K0023, $K0024, $K0025, $K0026, $K0027, $K0028, $K0029, $K0030, $K0031, $K0032, $K0033, $K0034];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2016</h2>

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
