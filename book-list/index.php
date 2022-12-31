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

	$A0001 = bookForm(10001, "Take the Cannoli", "Sarah Vowell", "non-fiction", 2006, false);
	$A0002 = bookForm(10002, "The Partly Cloudy Patriot", "Sarah Vowell", "non-fiction--American history", 2006, true);
	$A0003 = bookForm(10003, "Assassination Vacation", "Sarah Vowell", "non-fiction--American history", 2006, true);
	$A0004 = bookForm(10004, "1776", "David McCullough", "non-fiction--American history", 2006, false);
	$A0005 = bookForm(10005, "A Brief History of Time", "Stephen Hawking", "non-fiction--science", 2006, false);
	$A0006 = bookForm(10006, "E=mc2: A Biography of the World's Most Famous Equation", "David Bodanis", "non-fiction--science", 2006, false);
	$A0007 = bookForm(10007, "The Five Ages of the Universe: Inside the Physics of Eternity", "Fred Adams & Greg Laughlin", "non-fiction--science", 2006, false);
	$A0008 = bookForm(10008, "The Corrections", "Jonathan Franzen", "fiction", 2006, false);
	$A0009 = bookForm(10009, "Everything is Illuminated", "Jonathan Safran Foer", "fiction", 2006, true);
	$A0010 = bookForm(10010, "The Sibyl in Her Grave", "Sarah Caudwell", "fiction--mystery", 2006, true);
	$A0011 = bookForm(10011, "Undaunted Courage: Meriwether Lewis, Thomas Jefferson, and the Opening of the American West", "Stephen Ambrose", "non-fiction--American history", 2006, false);
	$A0012 = bookForm(10012, "The Little Prince", "Antoine de Saint-Exupery", "fiction--children's", 2006, true);
	$A0013 = bookForm(10013, "The Cricket in Times Square", "George Selden", "fiction--children's", 2006, false);
	$A0014 = bookForm(10014, "Dreams from My Father", "Barack Obama", "non-fiction--memoir", 2006, false);
	$A0015 = bookForm(10015, "Thus Was Adonis Murdered", "Sarah Caudwell", "fiction--mystery", 2006, false);
	$A0016 = bookForm(10016, "Marie Antoinette: The Journey", "Antonia Fraser", "non-fiction--biography", 2006, false);
	$A0017 = bookForm(10017, "The Cider House Rules", "John Irving", "fiction", 2006, false);
	$A0018 = bookForm(10018, "Female Chauvinist Pigs", "Ariel Levy", "non-fiction--feminism", 2006, true);
	$A0019 = bookForm(10019, "The Devil in the WhiteCity: Murder, Magic and Madness at the Fair that Changed America", "Erik Larsen", "non-fiction--American history", 2006, false);
	$A0020 = bookForm(10020, "A Tale of Two Cities", "Charles Dickens", "fiction--classic", 2006, true);
	$A0021 = bookForm(10021, "The Fellowship of the Ring", "J.R.R. Tolkien", "fiction--fantasy", 2006, true);
	$A0022 = bookForm(10022, "Kitchen", "Banana Yoshimoto", "fiction", 2006, false);
	$A0023 = bookForm(10023, "Sula", "Toni Morrison", "fiction", 2006, false);

	$books = [$A0001, $A0002, $A0003, $A0004, $A0005, $A0006, $A0007, $A0008, $A0009, $A0010, $A0011, $A0012, $A0013, $A0014, $A0015, $A0016, $A0017, $A0018, $A0019, $A0020, $A0021, $A0022, $A0023];

?>

<inner-column>

	<h2 class="attention-voice">Books read in 2006</h2>

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




