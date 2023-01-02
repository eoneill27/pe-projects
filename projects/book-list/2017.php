<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$L0001 = bookForm(10459, "The Wild Oats Project", "Robin Rinaldi", "non-fiction--memoir", 2017, false);
	$L0002 = bookForm(10460, "Macbeth", "Shakespeare", "fiction--play", 2017, false);
	$L0003 = bookForm(10461, "Hitler: The Ascent (1889-1939),Volker Ullrich", "non-fiction", "non-fiction--biography, WWII history", 2017, false);
	$L0004 = bookForm(10462, "Moonglow", "Michael Chabon", "fiction", 2017, true);
	$L0005 = bookForm(10463, "Euphoria", "Lily King", "fiction", 2017, true);
	$L0006 = bookForm(10464, "Time Travel", "James Gleick", "non-fiction--science", 2017, false);
	$L0007 = bookForm(10465, "The Secret History", "Donna Tartt", "fiction", 2017, true);
	$L0008 = bookForm(10466, "The Fate of the Tearling", "Erika Johansen", "fiction--fantasy", 2017, true);
	$L0009 = bookForm(10467, "All the Light We Cannot See", "Anthony Doerr", "fiction--historical", 2017, true);
	$L0010 = bookForm(10468, "All My Puny Sorrows", "Miriam Toews", "fiction", 2017, true);
	$L0011 = bookForm(10469, "Shakespeare: The World as Stage", "Bill Bryson", "non-fiction--biography", 2017, true);
	$L0012 = bookForm(10470, "The Professor and the Madman", "Simon Winchester", "non-fiction--history", 2017, true);
	$L0013 = bookForm(10471, "The Unbearable Lightness of Being", "Milan Kundera", "fiction", 2017, false);
	$L0014 = bookForm(10472, "Great Bridge: The Epic Story of the Building of the Brooklyn Bridge", "David McCullough", "non-fiction--American history", 2017, true);
	$L0015 = bookForm(10473, "The Little Virtues", "Natalia Ginzburg", "non-fiction--essays", 2017, true);
	$L0016 = bookForm(10474, "Nudge: Improving Decisions About Health, Wealth, and Happiness", "Richard H. Thaler & Cass R. Sunstein", "non-fiction", 2017, false);
	$L0017 = bookForm(10475, "God in Pink", "Hasan Namir", "fiction", 2017, false);
	$L0018 = bookForm(10476, "The Interestings", "Meg Wolitzer", "fiction", 2017, false);
	$L0019 = bookForm(10477, "The Evangelicals: The Struggle to Shape America", "Frances Fitzgerald", "non-fiction--American history", 2017, false);
	$L0020 = bookForm(10478, "The Extraordinary Education of Nicholas Benedict", "Trenton Lee Stewart", "fiction--young adult", 2017, true);
	$L0021 = bookForm(10479, "The Orphan Master's Son", "Adam Johnson", "fiction", 2017, true);
	$L0022 = bookForm(10480, "Eugene Onegin", "Alexander Pushkin", "fiction--classic", 2017, false);
	$L0023 = bookForm(10481, "Minimalism: Live a Meaningful Life", "Joshua Fields Millburn & Ryan Nicodemi", "non-fiction", 2017, false);
	$L0024 = bookForm(10482, "Untangled: Guiding Teenage Girls Through the Seven Transitions Into Adulthood", "Lisa Damour", "non-fiction", 2017, true);
	$L0025 = bookForm(10483, "North Korea's Hidden Revolution: How the Information Underground is Transforming a Closed Society", "Jieun Baek", "non-fiction", 2017, false);
	$L0026 = bookForm(10484, "Hunger: A Memoir of (My) Body", "Roxane Gay", "non-fiction--memoir", 2017, false);
	$L0027 = bookForm(10485, "The Way the Crow Flies", "Ann-Marie MacDonald", "fiction", 2017, false);
	$L0028 = bookForm(10486, "The Cuckoo's Calling", "Robert Galbraith", "fiction--mystery", 2017, true);
	$L0029 = bookForm(10487, "Do Not Say We Have Nothing", "Madeleine Thien", "fiction", 2017, true);
	$L0030 = bookForm(10488, "Bonfire", "Krysten Ritter", "fiction--thriller", 2017, false);
	$L0031 = bookForm(10489, "The Book of Dust, Volume One: La Belle Sauvage", "Philip Pullman", "fiction--fantasy", 2017, true);
	$L0032 = bookForm(10490, "Nasty Women: Feminism, Resistance, and Revolution in Trump's America","Samhita Makhopadhyay & Kate Harding, eds.", "non-fiction--feminism", 2017, true);

	$books = [$L0001, $L0002, $L0003, $L0004, $L0005, $L0006, $L0007, $L0008, $L0009, $L0010, $L0011, $L0012, $L0013, $L0014, $L0015, $L0016, $L0017, $L0018, $L0019, $L0020, $L0021, $L0022, $L0023, $L0024, $L0025, $L0026, $L0027, $L0028, $L0029, $L0030, $L0031, $L0032];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2017</h2>

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
