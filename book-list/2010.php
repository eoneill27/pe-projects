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

	$E0001 = bookForm(10208, "A Walk in the Woods", "Bill Bryson", "non-fiction--travel", 2010, false);
	$E0002 = bookForm(10209, "Goddess of the Market: Ayn Rand and the American Right", "Jennifer Burns", "non-fiction", 2010, false);
	$E0003 = bookForm(10210, "The Mysterious Benedict Society", "Trenton Lee Stewart", "fiction--children's", 2010, true);
	$E0004 = bookForm(10211, "Her Fearful Symmetry", "Audrey Niffenegger", "fiction", 2010, false);
	$E0005 = bookForm(10212, "The Mysterious Benedict Society and the Perilous Journey", "Trenton Lee Stewart", "fiction--children's", 2010, true);
	$E0006 = bookForm(10213, "The BFG", "Roald Dahl", "fiction--children's", 2010, false);
	$E0007 = bookForm(10214, "Consumption", "Kevin Patterson", "fiction", 2010, false);
	$E0008 = bookForm(10215, "The Mysterious Benedict Society and the Prisoner's Dilemma", "Trenton Lee Stewart", "fiction--children's", 2010, false);
	$E0009 = bookForm(10216, "Empire of Illusion: The End of Literacy and the Triumph of Spectacle", "Chris Hedges", "non-fiction", 2010, false);
	$E0010 = bookForm(10217, "The Glass Castle", "Jeannette Walls", "non-fiction--memoir", 2010, false);
	$E0011 = bookForm(10218, "Jonathan Strange & Mr. Norrell", "Susanna Clarke", "fiction--fantasy", 2010, true); 
	$E0012 = bookForm(10219, "The Ladies of Grace Adieu", "Susanna Clarke", "fiction", 2010, false);
	$E0013 = bookForm(10220, "The World According to Garp", "John Irving", "fiction", 2010, true);
	$E0014 = bookForm(10221, "The Art of Choosing", "Sheena Iyengar", "non-fiction", 2010, false);
	$E0015 = bookForm(10222, "The Book of Negroes", "Lawrence Hill", "fiction--historical fiction", 2010, false);
	$E0016 = bookForm(10223, "Stasiland", "Anna Funder", "non-fiction--European history", 2010, true);
	$E0017 = bookForm(10224, "The Adventures of Robin Hood", "E. Charles Vivian", "fiction--classic", 2010, false);
	$E0018 = bookForm(10225, "No Great Mischief", "Alistair MacLeod", "fiction", 2010, false);
	$E0019 = bookForm(10226, "The Girl With the Dragon Tattoo", "Stieg Larsson", "fiction--thriller", 2010, false);
	$E0020 = bookForm(10227, "Dead Until Dark", "Charlaine Harris", "fiction--fantasy/romance", 2010, false);
	$E0021 = bookForm(10228, "Living Dead in Dallas", "Charlaine Harris", "fiction--fantasy/romance", 2010, false);
	$E0022 = bookForm(10229, "Cecil and Jordan in New York: Stories", "Gabrielle Bell", "fiction--graphic novel", 2010, false);
	$E0023 = bookForm(10230, "Fall on Your Knees", "Ann-Marie MacDonald", "fiction", 2010, true);
	$E0024 = bookForm(10231, "The Help", "Kathryn Stockett", "fiction", 2010, false);
	$E0025 = bookForm(10232, "Rosy is My Relative", "Gerald Durrell", "non-fiction", 2010, false);
	$E0026 = bookForm(10233, "Club Dead", "Charlaine Harris", "fiction--fantasy/romance", 2010, false);
	$E0027 = bookForm(10234, "Game Change: Obama and the Clintons, McCain and Palin, and the Race of a Lifetime", "John Heilemann & Mark Halperin", "non-fiction--American politics", 2010, true);
	$E0028 = bookForm(10235, "The Armageddon Factor: The Rise of Christian Nationalism in Canada", "Marci McDonald", "non-fiction", 2010, false);
	$E0029 = bookForm(10236, "One Perfect Day: The Selling of the American Wedding", "Rebecca Mead", "non-fiction", 2010, false);
	$E0030 = bookForm(10237, "Dead to the World", "Charlaine Harris", "fiction--fantasy/romance", 2010, false);
	$E0031 = bookForm(10238, "The Good Man Jesus and the Scoundrel Christ", "Philip Pullman", "fiction", 2010, false);
	$E0032 = bookForm(10239, "Moneyball: The Art of Winning an Unfair Game", "Michael Lewis", "non-fiction", 2010, true);
	$E0033 = bookForm(10240, "The Girl Who Played With Fire", "Stieg Larsson", "fiction--thriller", 2010, false);
	$E0034 = bookForm(10241, "Oryx and Crake", "Margaret Atwood", "fiction--science fiction", 2010, false);
	$E0035 = bookForm(10242, "The Principles of Uncertainty", "Maira Kalman", "non-fiction--graphic novel", 2010, true);
	$E0036 = bookForm(10243, "Tom Bedlam", "George Hagen", "fiction", 2010, false);
	$E0037 = bookForm(10244, "The Wonderful O", "James Thurber", "fiction", 2010, false);
	$E0038 = bookForm(10245, "Dead as a Doornail", "Charlaine Harris", "fiction--fantasy/romance", 2010, false);
	$E0039 = bookForm(10246, "Bel Canto", "Ann Patchett", "fiction", 2010, true);
	$E0040 = bookForm(10247, "The Englishman's Boy", "Guy Vanderhaeghe", "fiction", 2010, false);
	$E0041 = bookForm(10248, "The Spirit Level: Why Equality is Better for Everyone", "Richard Wilkinson & Kate Pickett", "non-fiction", 2010, true); 
	$E0042 = bookForm(10248, "The Man Who Never Returned", "Peter Quinn", "fiction", 2010, false);
	$E0043 = bookForm(10249, "The Girl Who Kicked the Hornet's Nest", "Stieg Larsson", "fiction--thriller", 2010, false);
	$E0044 = bookForm(10250, "Three Day Road", "Joseph Boyden", "fiction", 2010, false);
	$E0045 = bookForm(10251, "The Hunger Games", "Suzanne Collins", "fiction--young adult fantasy", 2010, false);
	$E0046 = bookForm(10252, "In Praise of Slow: How a Worldwide Movement is Challenging the Cult of Speed", "Carl Honore", "non-fiction", 2010, true);
	$E0047 = bookForm(10253, "Skellig", "David Almond", "fiction--young adult", 2010, false);



	$books = [$E0001, $E0002, $E0003, $E0004, $E0005, $E0006, $E0007, $E0008, $E0009, $E0010, $E0011, $E0012, $E0013, $E0014, $E0015, $E0016, $E0017, $E0018, $E0019, $E0020, $E0021, $E0022, $E0023, $E0024, $E0025, $E0026, $E0027, $E0028, $E0029, $E0030, $E0031, $E0032, $E0033, $E0034, $E0035, $E0036, $E0037, $E0038, $E0039, $E0040, $E0041, $E0042, $E0043, $E0044, $E0045, $E0046, $E0047];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2010</h2>

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
