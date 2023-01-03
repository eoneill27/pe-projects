<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

$Q0001 = bookForm(10679, "The Book of Form and Emptiness", "Ruth Ozeki", "fiction", 2022, true);
$Q0002 = bookForm(10680, "The Last Wish [Witcher book 1]", "Andrzej Sapkowski", "fiction--fantasy", 2022, false);
$Q0003 = bookForm(10681, "Under the Banner of Heaven: A Story of Violent Faith", "Jon Krakauer", "non-fiction--cults", 2022, true);
$Q0004 = bookForm(10682, "Primary Obsessions", "Charles Demers", "fiction--mystery", 2022, false);
$Q0005 = bookForm(10683, "Cloud Cuckoo Land", "Anthony Doerr", "fiction", 2022, true);
$Q0006 = bookForm(10684, "Life in the City of Dirty Water: A Memoir of Healing", "Clayton Thomas-Muller", "non-fiction--memoir", 2022, false);
$Q0007 = bookForm(10685, "For the Time Being", "Annie Dillard", "non-fiction", 2022, true);
$Q0008 = bookForm(10686, "The Sentence", "Louise Erdrich", "fiction", 2022, true);
$Q0009 = bookForm(10687, "Homerooms & Hall Passes", "Tom O'Donnell", "fiction--young adult fantasy", 2022, false);
$Q0010 = bookForm(10688, "The Midnight Library", "Matt Haig", "fiction", 2022, false);
$Q0011 = bookForm(10689, "Deacon King Kong", "James McBride", "fiction", 2022, true);
$Q0012 = bookForm(10690, "Educated", "Tara Westover", "non-fiction--memoir", 2022, true);
$Q0013 = bookForm(10691, "The Switch", "Beth O'Leary", "fiction", 2022, true);
$Q0014 = bookForm(10692, "Vermeer's Hat: The Seventeenth Century and the Dawn of the Global World", "Timothy Brook", "non-fiction--world history", 2022, true);
$Q0015 = bookForm(10693, "The End of Craving: Recovering the Lost Wisdom of Eating Well", "Mark Schatzker", "non-fiction", 2022, false);
$Q0016 = bookForm(10694, "Hell of a Book", "Jason Mott", "fiction", 2022, true);
$Q0017 = bookForm(10695, "My Sister, the Serial Killer", "Oyinkan Braithwaite", "fiction--thriller", 2022, false);
$Q0018 = bookForm(10696, "Origin: A Genetic History of the Americas", "Jennifer Raff", "non-fiction", 2022, false);
$Q0019 = bookForm(10697, "Hello, Molly! A Memoir", "Molly Shannon", "non-fiction--memoir", 2022, true);
$Q0020 = bookForm(10698, "Don't Make Me Think, Revisited: A Common Sense Approach to Web Usability", "Steve Krug", "non-fiction--web design", 2022, true);
$Q0021 = bookForm(10699, "Little Fires Everywhere", "Celeste Ng", "fiction", 2022, true);
$Q0022 = bookForm(10700, "The Elements of User Experience: User-Centered Design for the Web", "Jesse James Garrett", "non-fiction--web design", 2022, true);
$Q0023 = bookForm(10701, "The Dogs of Riga", "Henning Mankell; Laurie Thompson, trans.", "fiction--mystery", 2022, true);
$Q0024 = bookForm(10702, "Dust", "Martha Grimes", "fiction--mystery", 2022, true);
$Q0025 = bookForm(10703, "Pattern Recognition", "William Gibson", "fiction", 2022, true);
$Q0026 = bookForm(10704, "Faceless Killers", "Henning Mankell; Steven T. Murray, trans.", "fiction--myster", 2022, false); 
$Q0027 = bookForm(10705, "The White Lioness", "Henning Mankell; Laurie Thompson, trans.", "fiction--mystery", 2022, false);
$Q0028 = bookForm(10706, "Mexican Gothic", "Silvia Moreno-Garcia", "fiction", 2022, true);
$Q0029 = bookForm(10707, "The Lincoln Highway", "Amor Towles", "fiction", 2022, true);
$Q0030 = bookForm(10708, "The Boat People", "Sharon Bala", "fiction", 2022, true);
$Q0031 = bookForm(10709, "Heartstopper", "Alice Oseman", "fiction--graphic novel", 2022, true);
$Q0032 = bookForm(10710, "The Design of Everyday Things", "Don Norman", "non-fiction", 2022, false);

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
