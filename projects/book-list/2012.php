<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$G0001 = bookForm(10298, "The Tiger's Wife", "Tea Obreht", "fiction", 2012, true);
	$G0002 = bookForm(10299, "A Clash of Kings", "George R.R. Martin", "fiction--fantasy", 2012, false); 
	$G0003 = bookForm(10300, "Wildwood", "Colin Meloy", "fiction--children's fantasy", 2012, true);
	$G0004 = bookForm(10301, "A Study in Scarlet", "Sir Arthur Conan Doyle", "fiction--mystery", 2012, false);
	$G0005 = bookForm(10302, "The Phantom Tollbooth", "Norton Juster", "fiction--children's fantasy", 2012, false);
	$G0006 = bookForm(10303, "The Sign of Four", "Sir Arthur Conan Doyle", "fiction--mystery", 2012, false);
	$G0007 = bookForm(10304, "World War Z", "Max Brooks", "fiction--science fiction", 2012, false);
	$G0008 = bookForm(10305, "A Red Herring Without Mustard", "Alan Bradley", "fiction--mystery", 2012, false);
	$G0009 = bookForm(10306, "Swamplandia!", "Karen Russell", "fiction", 2012, true); 
	$G0010 = bookForm(10307, "Black Swan Green", "David Mitchell", "fiction", 2012, true);
	$G0011 = bookForm(10308, "Ghostwritten", "David Mitchell", "fiction", 2012, true);
	$G0012 = bookForm(10309, "The Family Fang", "Kevin Wilson", "fiction", 2012, false);
	$G0013 = bookForm(10310, "The Night Circus", "Erin Morgenstern", "fiction", 2012, false);
	$G0014 = bookForm(10311, "Rumspringa: To Be or Not to Be Amish", "Tom Shachtman", "non-fiction", 2012, false);
	$G0015 = bookForm(10312, "A Storm of Swords", "George R.R. Martin", "fiction--fantasy", 2012, false);
	$G0016 = bookForm(10313, "The Immortal Life of Henrietta Lacks", "Rebecca Skloot", "non-fiction--science", 2012, true);
	$G0017 = bookForm(10314, "A Feast for Crows", "George R.R. Martin", "fiction--fantasy", 2012, false);
	$G0018 = bookForm(10315, "Leviathan", "Scott Westerfeld", "fiction--children's fantasy", 2012, false);
	$G0019 = bookForm(10316, "A Dance With Dragons", "George R.R. Martin", "fiction--fantasy", 2012, false);
	$G0020 = bookForm(10317, "Little House on a Small Planet", "Shay Salomon", "non-fiction", 2012, false); 
	$G0021 = bookForm(10318, "Mayflower", "Nathaniel Philbrick", "non-fiction--American history", 2012, false);
	$G0022 = bookForm(10319, "The Best Laid Plans", "Terry Fallis", "fiction", 2012, false); 
	$G0023 = bookForm(10320, "My Year of the Racehorse: Falling in Love With the Sport of Kings", "Kevin Chong", "non-fiction", 2012, false);
	$G0024 = bookForm(10321, "Girl Walks Into a Bar", "Rachel Dratch", "fiction--memoir", 2012, false);
	$G0025 = bookForm(10322, "The Book Thief", "Markus Zusak", "fiction", 2012, true);
	$G0026 = bookForm(10323, "Quiet: The Power of Introverts in a World that Can't Stop Talking", "Susan Cain", "non-fiction", 2012, false);
	$G0027 = bookForm(10324, "Watership Down", "Richard Adams", "fiction--fantasy", 2012, true);
	$G0028 = bookForm(10325, "Einstein's Dreams", "Alan Lightman", "fiction", 2012, false);
	$G0029 = bookForm(10326, "Just Kids", "Patti Smith", "non-fiction--memoir", 2012, false);
	$G0030 = bookForm(10327, "Battle Hymn of the Tiger Mother", "Amy Chua", "non-fiction", 2012, false);
	$G0031 = bookForm(10328, "More Baths Less Talking", "Nick Hornby", "non-fiction", 2012, false);
	$G0032 = bookForm(10329, "The Assassination of Jesse James by the Coward Robert Ford", "Ron Hansen", "fiction--western", 2012, true);
	$G0033 = bookForm(10330, "How to Be a Woman", "Caitlin Moran", "non-fiction--memoir", 2012, true);
	$G0034 = bookForm(10331, "Wolf Hall", "Hilary Mantel", "fiction--historical fiction", 2012, false);
	$G0035 = bookForm(10332, "The Particular Sadness of Lemon Cake", "Aimee Bender", "fiction", 2012, false);
	$G0036 = bookForm(10333, "A Gate at the Stairs", "Lorrie Moore", "fiction", 2012, false);
	$G0037 = bookForm(10334, "First Spring Grass Fire", "Rae Spoon", "fiction", 2012, false);

	$books = [$G0001, $G0002, $G0003, $G0004, $G0005, $G0006, $G0007, $G0008, $G0009, $G0010, $G0011, $G0012, $G0013, $G0014, $G0015, $G0016, $G0017, $G0018, $G0019, $G0020, $G0021, $G0022, $G0023, $G0024, $G0025, $G0026, $G0027, $G0028, $G0029, $G0030, $G0031, $G0032, $G0033, $G0034, $G0035, $G0036, $G0037];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2012</h2>

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
