<?php include('header.php'); ?>

<?php

function bookForm($id, $title, $author, $genre, $yearRead, $recommended) {
		$book = [
			"id" => $id,
			"title" => $title,
			"author" => $author,
			"genre" => $genre,
			"yearRead" => $yearRead,
			"recommended" => $recommended,
		];

		return $book;
	}

$B0001 = bookForm(10024, "The Rebel Angels", "Robertson Davies", "fiction", 2007, false);
$B0002 = bookForm(10025, "Launching History: The Saga of the Burrard Dry Dock", "Francis Mansbridge", "non-fiction--Canadian history", 2007, false);
$B0003 = bookForm(10026, "Invisible Cities", "Italo Calvino", "Fiction", 2007, true);
$B0004 = bookForm(10027, "The Feast of Love", "Charles Baxter", "Fiction", 2007, true);
$B0005 = bookForm(10028, "Extremely Loud and Incredibly Close", "Jonathan Safran Foer", "Fiction", 2007, true);
$B0006 = bookForm(10029, "A Room With a View", "E.M. Forster", "fiction--classic", 2007, false);
$B0007 = bookForm(10030, "Middlesex", "Jeffrey Eugenides", "fiction", 2007, true); 
$B0008 = bookForm(10031, "What's Bred in the Bone", "Robertson Davies", "fiction", 2007, false);
$B0009 = bookForm(10032, "The Fledgling", "Jane Langton", "fiction--children's", 2007, true);
$B0010 = bookForm(10033, "The Lyre of Orpheus", "Robertson Davies", "fiction", 2007, false);
$B0011 = bookForm(10034, "The Diamond in the Window", "Jane Langton", "fiction--children's", 2007, false);
$B0012 = bookForm(10035, "Clockwork", "Philip Pullman", "fiction--young adult", 2007, false);
$B0013 = bookForm(10036, "The Beauty Myth", "Naomi Wolf", "non-fiction--feminism", 2007, false);
$B0014 = bookForm(10037, "The Swing in the Summerhouse", "Jane Langton", "fiction--children's", 2007, false);
$B0015 = bookForm(10038, "The Astonishing Stereoscope", "Jane Langton", "fiction--children's", 2007, false);
$B0016 = bookForm(10039, "The Thief Lord", "Cornelia Funke", "fiction--young adult fantasy", 2007, false);
$B0017 = bookForm(10040, "Everything on a Waffle", "Polly Horvath", "fiction--young adult", 2007, false);
$B0018 = bookForm(10041, "Odd Man Out", "Sarah Ellis", "fiction--young adult", 2007, false);
$B0019 = bookForm(10042, "Silverwing", "Kenneth Oppel", "fiction--young adult fantasy", 2007, false);
$B0020 = bookForm(10043, "Chasing Vermeer", "Blue Balliett", "fiction--young adult mystery", 2007, false);
$B0021 = bookForm(10044, "Sunwing", "Kenneth Oppel", "fiction--young adult fantasy", 2007, false);
$B0022 = bookForm(10045, "Artemis Fowl", "Eoin Colfer", "fiction--young adult fantasy", 2007, false);
$B0023 = bookForm(10046, "Gregor the Overlander", "Suzanne Collins", "fiction--young adult fantasy", 2007, true);
$B0024 = bookForm(10047, "Gregor and the Prophecy of Bane", "Suzanne Collins", "fiction--young adult fantasy", 2007, false);
$B0025 = bookForm(10048, "Sabriel", "Garth Nix", "fiction--fantasy", 2007, false); 
$B0026 = bookForm(10049, "Gregor and the Curse of the Warmbloods", "Suzanne Collins", "fiction--young adult fantasy", 2007, false);
$B0027 = bookForm(10050, "The Curse of the Blue Figurine", "John Bellairs", "fiction--young adult mystery", 2007, false);
$B0028 = bookForm(10051, "Dragon Rider", "Cornelia Funke", "fiction--young adult fantasy", 2007, false);
$B0029 = bookForm(10052, "Gregor and the Marks of Secret", "Suzanne Collins", "fiction--young adult fantasy", 2007, false);
$B0030 = bookForm(10053, "The Book of Three", "Lloyd Alexander", "fiction--young adult fantasy", 2007, true);
$B0031 = bookForm(10054, "Dead as a Dodo", "Jane Langton", "fiction--mystery", 2007, true);
$B0032 = bookForm(10055, "The Eight", "Katherine Neville", "fiction--mystery", 2007, false);
$B0033 = bookForm(10056, "The Poisonwood Bible", "Barbara Kingsolver", "fiction", 2007, true);
$B0034 = bookForm(10057, "The Black Cauldron", "Lloyd Alexander", "fiction--young adult fantasy", 2007, true);
$B0035 = bookForm(10058, "Thirteen Moons", "Charles Frazier", "fiction", 2007, false);
$B0036 = bookForm(10059, "The Shortest Day", "Jane Langton", "fiction--mystery", 2007, false);
$B0037 = bookForm(10060, "The Geographer's Library", "Jon Fasman", "fiction", 2007, false);
$B0038 = bookForm(10061, "The Thief of Venice", "Jane Langton", "fiction--mystery", 2007, false);
$B0039 = bookForm(10062, "A Season to be Sinful", "Jo Goodman", "fiction--romance", 2007, false);
$B0040 = bookForm(10063, "Zorro", "Isabel Allende", "fiction", 2007, false);
$B0041 = bookForm(10064, "High Country", "Willard Wyman", "fiction--western", 2007, true);
$B0042 = bookForm(10065, "Air (Or, Have not Have)", "Geoff Ryman", "fiction--science fiction", 2007, false);
$B0043 = bookForm(10066, "The Red Mass", "Rosemary Aubert", "fiction--mystery", 2007, false);
$B0044 = bookForm(10067, "Beauty and Misogyny", "Sheila Jeffreys", "fiction--feminism", 2007, false);
$B0045 = bookForm(10068, "Bad Ground", "Dale Cramer", "fiction--Christian", 2007, false);
$B0046 = bookForm(10069, "Ghost Empire: How the French Almost Conquered North America", "Philip Marchand", "non-fiction--American history", 2007, false);
$B0047 = bookForm(10070, "Harry Potter and the Order of the Phoenix", "J.K. Rowling", "fiction--young adult fantasy", 2007, true);
$B0048 = bookForm(10071, "Harry Potter and the Half-Blood Prince", "J.K. Rowling", "fiction--young adult fantasy", 2007, true);
$B0049 = bookForm(10072, "Bury the Chains: Prophets and Rebels in the Fight to Free an Empire's Slaves", "Adam Hochschild", "non-fiction--British history", 2007, false);
$B0050 = bookForm(10073, "The Golden Compass", "Philip Pullman", "fiction--young adult fantasy", 2007, true);
$B0051 = bookForm(10074, "The Subtle Knife", "Philip Pullman", "fiction--young adult fantasy", 2007, true);
$B0052 = bookForm(10075, "Harry Potter and the Deathly Hallows", "J.K. Rowling", "fiction--young adult fantasy", 2007, true);
$B0053 = bookForm(10076, "The Amber Spyglass", "Philip Pullman", "fiction--young adult fantasy", 2007, true);
$B0054 = bookForm(10077, "Over Sea, Under Stone", "Susan Cooper", "fiction--young adult fantasy", 2007, true); 
$B0055 = bookForm(10078, "The Dark is Rising", "Susan Cooper", "fiction--young adult fantasy", 2007, false);
$B0056 = bookForm(10079, "Greenwitch", "Susan Cooper", "fiction--young adult fantasy", 2007, false); 
$B0057 = bookForm(10080, "The Grey King", "Susan Cooper", "fiction--young adult fantasy", 2007, false);
$B0058 = bookForm(10081, "Silver on the Tree", "Susan Cooper", "fiction--young adult fantasy", 2007, true);
$B0059 = bookForm(10082, "The Castle of Lyr", "Lloyd Alexander", "fiction--young adult fantasy", 2007, true); 
$B0060 = bookForm(10083, "Taran Wanderer", "Lloyd Alexander", "fiction--young adult fantasy", 2007, true); 
$B0061 = bookForm(10084, "The High King", "Lloyd Alexander", "fiction--young adult fantasy", 2007, true); 
$B0062 = bookForm(10085, "Baudolino", "Umberto Eco", "fiction", 2007, false);
$B0063 = bookForm(10086, "The Autobiography of Alice B. Toklas", "Gertrude Stein", "non-fiction--memoir", 2007, true);
$B0064 = bookForm(10087, "The Spectator Bird", "Wallace Stegner", "fiction", 2007, false);
$B0065 = bookForm(10088, "Cat's Cradle", "Kurt Vonnegut", "fiction", 2007, false); 
$B0066 = bookForm(10089, "Slaughterhouse Five", "Kurt Vonnegut", "fiction", 2007, true);
$B0067 = bookForm(10090, "Under the Net", "Iris Murdoch", "fiction", 2007, true);
$B0068 = bookForm(10091, "Beloved", "Toni Morrison", "fiction", 2007, false);
$B0069 = bookForm(10092, "Julie of the Wolves", "Jean Craighead George", "fiction--young adult", 2007, true);
$B0070 = bookForm(10093, "Batman: The Dark Knight Strikes Again", "Frank Miller", "fiction--graphic novel", 2007, false);
$B0071 = bookForm(10094, "Batman: Year One", "Frank Miller & David Mazzucchelli", "fiction--graphic novel", 2007, false);
$B0072 = bookForm(10095, "Persepolis: The Story of a Childhood", "Marjane Satrapi", "fiction--graphic novel", 2007, true);
$B0073 = bookForm(10096, "Kristy's Great Idea: A Graphic Novel", "Raina Telgemeier", "fiction--young adult graphic novel", 2007, false);
$B0074 = bookForm(10097, "The Secret Life of Sparrow Delaney", "Suzanne Harper", "fiction--young adult", 2007, false);
$B0075 = bookForm(10098, "On the Road", "Jack Kerouac", "fiction--classic", 2007, false);
$B0076 = bookForm(10099, "To Hate Like This is to be Happy Forever", "Will Blythe", "non-fiction", 2007, false);

$books = [$B0001, $B0002, $B0003, $B0004, $B0005, $B0006, $B0007, $B0008, $B0009, $B0010, $B0011, $B0012, $B0013, $B0014, $B0015, $B0016, $B0017, $B0018, $B0019, $B0020, $B0021, $B0022, $B0023, $B0024, $B0025, $B0026, $B0027, $B0028, $B0029, $B0030, $B0031, $B0032, $B0033, $B0034, $B0035, $B0036, $B0037, $B0038, $B0039, $B0040, $B0041, $B0042, $B0043, $B0044, $B0045, $B0046, $B0047, $B0048, $B0049, $B0050, $B0051, $B0052, $B0053, $B0054, $B0055, $B0056, $B0057, $B0058, $B0059, $B0060, $B0061, $B0062, $B0063, $B0064, $B0065, $B0066, $B0067, $B0068, $B0069, $B0070, $B0071, $B0072, $B0073, $B0074, $B0075, $B0076];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2007</h2>

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
