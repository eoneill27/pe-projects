<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$D0001 = bookForm(10150, "The Story of Lucy Gault", "William Trevor", "fiction", 2009, true);
	$D0002 = bookForm(10151, "Life of Pi", "Yann Martel", "fiction", 2009, false);
	$D0003 = bookForm(10152, "Free for All: Oddballs, Geeks, and Gangstas in the Public Library", "Don Borchert", "non-fiction", 2009, false);
	$D0004 = bookForm(10153, "The Reader", "Bernard Schlink", "fiction", 2009, false);
	$D0005 = bookForm(10154, "Emily Climbs", "L.M. Montgomery", "fiction--children's", 2009, false);
	$D0006 = bookForm(10155, "The Club Dumas", "Arturo Perez-Reverte", "fiction", 2009, false);
	$D0007 = bookForm(10156, "Little Children", "Tom Perrotta", "fiction", 2009, false);
	$D0008 = bookForm(10157, "The Wainscott Weasel", "Tor Seidler", "fiction--children's", 2009, false);
	$D0009 = bookForm(10158, "White Teeth", "Zadie Smith", "fiction", 2009, true);
	$D0010 = bookForm(10159, "Some Hope - A Trilogy (Never Mind/Bad News/Some Hope)", "Edward St. Aubyn", "fiction", 2009, false);
	$D0011 = bookForm(10160, "How to Be a Canadian (Even if You Already Are One)", "Will Ferguson & Ian Ferguson", "fiction--humour", 2009, false);
	$D0012 = bookForm(10161, "The Nautical Chart", "Arturo Perez-Reverte", "fiction", 2009, false);
	$D0013 = bookForm(10162, "Falling Man", "Don DeLillo", "fiction", 2009, false); 
	$D0014 = bookForm(10163, "The Wordy Shipmates", "Sarah Vowell", "non-fiction--American history", 2009, false);
	$D0015 = bookForm(10164, "Still Alice", "Lisa Genova", "fiction", 2009, false);
	$D0016 = bookForm(10165, "Foucault's Pendulum", "Umberto Eco", "fiction", 2009, false);
	$D0017 = bookForm(10166, "A Clue for the Puzzle Lady", "Parnell Hall", "fiction--mystery", 2009, false);
	$D0018 = bookForm(10167, "Whales on Stilts!", "M.T. Anderson", "fiction--children's", 2009, true);
	$D0019 = bookForm(10168, "The Clue of the Linoleum Lederhosen", "M.T. Anderson", "fiction--children's", 2009, false);
	$D0020 = bookForm(10169, "An Invisible Sign of My Own", "Aimee Bender", "fiction", 2009, true);
	$D0021 = bookForm(10170, "Nerds: Who They Are and Why We Need More of Them", "David Anderegg", "non-fiction", 2009, true);
	$D0022 = bookForm(10171, "The Astonishing Life of Octavian Nothing, Traitor to the Nation, Volume I: The Pox Party", "M.T. Anderson", "fiction--children's", 2009, true);
	$D0023 = bookForm(10172, "Dude You're a Fag: Masculinity and Sexuality in High School", "C.J. Pascoe", "non-fiction", 2009, false);
	$D0024 = bookForm(10173, "The Astonishing Life of Octavian Nothing, Traitor to the Nation, Volume II: The Kingdom of the Waves", "M.T. Anderson", "fiction--children's", 2009, false);
	$D0025 = bookForm(10174, "The Game of Sunken Places", "M.T. Anderson", "fiction--children's", 2009, false);
	$D0026 = bookForm(10175, "A Wizard of Earthsea", "Ursula K. LeGuin", "fiction--young adult fantasy", 2009, false);
	$D0027 = bookForm(10176, "Gregor and the Code of Claw", "Suzanne Collins", "fiction--young adult fantasy", 2009, false);
	$D0028 = bookForm(10177, "Late Nights on Air", "Elizabeth Hay", "fiction", 2009, false);
	$D0029 = bookForm(10178, "Down River", "John Hart", "fiction", 2009, false);
	$D0030 = bookForm(10179, "Girl, 15, Charming But Insane", "Sue Limb", "fiction--young adult", 2009, false);
	$D0031 = bookForm(10180, "Companions on the Road", "Tanith Lee", "fiction--young adult fantasy", 2009, false);
	$D0032 = bookForm(10181, "The Winter Players", "Tanith Lee", "fiction--young adult fantasy", 2009, false);
	$D0033 = bookForm(10182, "Opening Skinner's Box: Great Psychological Experiments of the Twentieth Century", "Lauren Slater", "non-fiction--psychology", 2009, false);
	$D0034 = bookForm(10183, "The Willoughbys [audiobook]", "Lois Lowry", "fiction", 2009, true);
	$D0035 = bookForm(10184, "Dress Your Family in Corduroy and Denim", "David Sedaris", "fiction--humour", 2009, false);
	$D0036 = bookForm(10185, "Shop Class as Soulcraft: An Inquiry Into the Value of Work", "Matthew B. Crawford", "non-fiction", 2009, true);
	$D0037 = bookForm(10186, "Watchmen", "Alan Moore (Dave Gibbons, illus.)", "fiction--graphic novel", 2009, true);
	$D0038 = bookForm(10187, "The Tombs of Atuan (The Earthsea Cycle, Book 2)", "Ursula K. LeGuin", "fiction--young adult fantasy", 2009, false);
	$D0039 = bookForm(10188, "Persepolis 2: The Story of a Return", "Marjane Satrapi", "fiction--graphic novel", 2009, false);
	$D0040 = bookForm(10189, "Harry Potter and the Half-Blood Prince", "J.K. Rowling", "fiction--young adult fantasy", 2009, true);
	$D0041 = bookForm(10190, "Harry Potter and the Deathly Hallows", "J.K. Rowling", "fiction--young adult fantasy", 2009, true);
	$D0042 = bookForm(10191, "The Brief Wondrous Life of Oscar Wao", "Junot Diaz", "fiction", 2009, false);
	$D0043 = bookForm(10192, "The Boy in the Striped Pajamas", "John Boyne", "fiction--historical", 2009, false);
	$D0044 = bookForm(10193, "Quite a Year for Plums", "Bailey White", "fiction--short stories", 2009, false);
	$D0045 = bookForm(10194, "Mama Makes Up Her Mind", "Bailey White", "fiction--short stories", 2009, true);
	$D0046 = bookForm(10195, "V for Vendetta", "Alan Moore (David Lloyd, illus.)", "fiction--graphic novel", 2009, false);
	$D0047 = bookForm(10196, "Outlander", "Diana Gabaldon", "fiction", 2009, false);
	$D0048 = bookForm(10197, "The Guernsey Literary and Potato Peel Pie Society", "Mary Ann Shaffer & Annie Barrows", "fiction", 2009, true);
	$D0049 = bookForm(10198, "Sleeping at the Starlite Motel: and Other Adventures on the Way Back Home", "Bailey White", "fiction--short stories", 2009, true);
	$D0050 = bookForm(10199, "Welcome Home: Travels in Smalltown Canada", "Stuart McLean", "fiction--travel", 2009, false);
	$D0051 = bookForm(10200, "Three Cups of Tea: One Man's Mission to Promote Peace...One School at a Time", "Greg Mortenson & David Oliver Relin", "non-fiction", 2009, false);
	$D0052 = bookForm(10201, "Bloodletting and Miraculous Cures", "Vincent Lam", "fiction--short stories", 2009, false);
	$D0053 = bookForm(10202, "I Was Told There'd Be Cake", "Sloane Crosley", "fiction--essays", 2009, false);
	$D0054 = bookForm(10202, "The Tao of Pooh", "Benjamin Hoff", "non-fiction", 2009, false);
	$D0055 = bookForm(10203, "That Old Ace in the Hole", "Annie Proulx", "fiction", 2009, false);
	$D0056 = bookForm(10204, "Gridlock: Crossword Puzzles and the Mad Geniuses Who Create Them", "Matt Gaffney", "non-fiction", 2009, false);
	$D0057 = bookForm(10205, "Payback: Debt and the Shadow Side of Wealth", "Margaret Atwood", "non-fiction", 2009, true);
	$D0058 = bookForm(10206, "A Complicated Kindness", "Miriam Toews", "fiction", 2009, true);
	$D0059 = bookForm(10207, "Fun Home: A Family Tragicomic", "Alison Bechdel", "fiction--graphic novel", 2009, true);

	$books = [$D0001, $D0002, $D0003, $D0004, $D0005, $D0006, $D0007, $D0008, $D0009, $D0010, $D0011, $D0012, $D0013, $D0014, $D0015, $D0016, $D0017, $D0018, $D0019, $D0020, $D0021, $D0022, $D0023, $D0024, $D0025, $D0026, $D0027, $D0028, $D0029, $D0030, $D0031, $D0032, $D0033, $D0034, $D0035, $D0036, $D0037, $D0038, $D0039, $D0040, $D0041, $D0042, $D0043, $D0044, $D0045, $D0046, $D0047, $D0048, $D0049, $D0050, $D0051, $D0052, $D0053, $D0054, $D0055, $D0056, $D0057, $D0058, $D0059];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2009</h2>

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
