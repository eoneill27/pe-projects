<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$F0001 = bookForm(10254, "Cleopatra: A Life", "Stacy Schiff", "non-fiction--biography", 2011, false);
	$F0002 = bookForm(10255, "Catching Fire", "Suzanne Collins", "fiction--young adult fantasy", 2011, false);
	$F0003 = bookForm(10256, "Mockingjay", "Suzanne Collins", "fiction--young adult fantasy", 2011, false);
	$F0004 = bookForm(10257, "Through Black Spruce", "Joseph Boyden", "fiction", 2011, false);
	$F0005 = bookForm(10258, "Dominic", "William Steig", "fiction", 2011, true);
	$F0006 = bookForm(10259, "The Absolutely True Diary of a Part-Time Indian", "Sherman Alexie", "fiction--young adult", 2011, false);
	$F0007 = bookForm(10260, "Wuthering Heights", "Emily Bronte", "fiction--classic", 2011, false);
	$F0008 = bookForm(10261, "Hamlet's Blackberry: A Practical Philosophy for Building a Good Life in the Digital Age", "William Powers", "non-fiction", 2011, false);
	$F0009 = bookForm(10262, "The Secret Garden", "Frances Hodgson Burnett", "fiction--children's", 2011, true);
	$F0010 = bookForm(10263, "World War Z: An Oral History of the Zombie War", "Max Brooks", "fiction--science fiction", 2011, false);
	$F0011 = bookForm(10264, "The Sweetness at the Bottom of the Pie", "Alan Bradley", "fiction--mystery", 2011, true);
	$F0012 = bookForm(10265, "The Last Crossing", "Guy Vanderhaeghe", "fiction", 2011, true);
	$F0013 = bookForm(10266, "The Weed That Strings the Hangman's Bag", "Alan Bradley", "fiction--mystery", 2011, false);
	$F0014 = bookForm(10267, "Let the Great World Spin", "Colum McCann", "fiction", 2011, true);
	$F0015 = bookForm(10268, "Little Bee", "Chris Cleave", "fiction", 2011, false);
	$F0016 = bookForm(10269, "How Did You Get This Number", "Sloane Crosley", "fiction--short story", 2011, false);
	$F0017 = bookForm(10270, "Jane Eyre", "Charlotte Bronte", "fiction--classic", 2011, false);
	$F0018 = bookForm(10271, "The Thousand Autumns of Jacob de Zoet", "David Mitchell", "fiction--historical fiction", 2011, true);
	$F0019 = bookForm(10272, "The History of Love", "Nicole Krauss", "fiction", 2011, true);
	$F0020 = bookForm(10273, "The Colony of Unrequited Dreams", "Wayne Johnston", "fiction", 2011, false);
	$F0021 = bookForm(10274, "The Sentimentalists", "Johanna Skibsrud", "fiction", 2011, false);
	$F0022 = bookForm(10275, "Man Walks Into a Room", "Nicole Krauss", "fiction", 2011, false);
	$F0023 = bookForm(10276, "Freedom", "Jonathan Franzen", "fiction", 2011, false);
	$F0024 = bookForm(10277, "Great House", "Nicole Krauss", "fiction", 2011, false);
	$F0025 = bookForm(10278, "The Elegance of the Hedgehog", "Muriel Barbery", "fiction", 2011, false);
	$F0026 = bookForm(10279, "The Feminine Mistake: Are We Giving Up Too Much?", "Leslie Bennetts", "non-fiction--feminism", 2011, false);
	$F0027 = bookForm(10280, "At Home: A Short History of Private Life", "Bill Bryson", "non-fiction", 2011, true);
	$F0028 = bookForm(10281, "Journey Through Britain", "John Hillaby", "non-fiction--travel", 2011, false);
	$F0029 = bookForm(10282, "The Bird Artist", "Howard Norman", "fiction", 2011, false);
	$F0030 = bookForm(10283, "The Wind-Up Bird Chronicle", "Haruki Murakami", "fiction", 2011, true);
	$F0031 = bookForm(10284, "Galore", "Michael Crummey", "fiction", 2011, false);
	$F0032 = bookForm(10285, "Birds of America", "Lorrie Moore", "fiction--short story", 2011, true);
	$F0033 = bookForm(10286, "Jasper Dash and the Flame-Pits of Delaware", "M.T. Anderson", "fiction--children's", 2011, false);
	$F0034 = bookForm(10287, "The Curious Incident of the Dog in the Night-time", "Mark Haddon", "fiction--mystery", 2011, false);
	$F0035 = bookForm(10288, "Game of Thrones", "George R.R. Martin", "fiction--fantasy", 2011, false);
	$F0036 = bookForm(10289, "Cloud Atlas", "David Mitchell", "fiction", 2011, true);
	$F0037 = bookForm(10290, "The Unwanted Sound of Everything We Want: A Book About Noise", "Garret Keizer", "non-fiction", 2011, false);
	$F0038 = bookForm(10291, "The Spirit Catches You and You Fall Down", "Anne Fadiman", "non-fiction", 2011, true);
	$F0039 = bookForm(10292, "The Fellowship of the Ring", "J.R.R. Tolkien", "fiction--fantasy", 2011, true);
	$F0040 = bookForm(10293, "The Two Towers", "J.R.R. Tolkien", "fiction--fantasy", 2011, true);
	$F0041 = bookForm(10294, "The Return of the King", "J.R.R. Tolkien", "fiction--fantasy", 2011, true);
	$F0042 = bookForm(10295, "Is Everyone Hanging Out Without Me? (And Other Concerns)", "Mindy Kaling", "non-fiction--essays", 2011, false);
	$F0043 = bookForm(10296, "Bossypants", "Tina Fey", "non-fiction--memoir", 2011, false); 
	$F0044 = bookForm(10297, "Fresh at Twenty: The Oral History of Mint Records", "Kaitlin Fontana", "non-fiction", 2011, false);


	$books = [$F0001, $F0002, $F0003, $F0004, $F0005, $F0006, $F0007, $F0008, $F0009, $F0010, $F0011, $F0012, $F0013, $F0014, $F0015, $F0016, $F0017, $F0018, $F0019, $F0020, $F0021, $F0022, $F0023, $F0024, $F0025, $F0026, $F0027, $F0028, $F0029, $F0030, $F0031, $F0032, $F0033, $F0034, $F0035, $F0036, $F0037, $F0038, $F0039, $F0040, $F0041, $F0042, $F0043, $F0044];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2011</h2>

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
