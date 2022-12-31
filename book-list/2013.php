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

	$H0001 = bookForm(10298, "Ender's Game", "Orson Scott Card", "fiction--young adult fantasy", 2013, false); 
	$H0002 = bookForm(10299, "How Should a Person Be?", "Sheila Heti", "fiction", 2013, false);
	$H0003 = bookForm(10300, "Anna Karenina", "Leo Tolstoy", "fiction--classic", 2013, false);
	$H0004 = bookForm(10301, "Asterios Polyp", "David Mazzucchelli", "fiction--graphic novel", 2013, false);
	$H0005 = bookForm(10302, "The Wicked Enchantment", "Margot Benary-Isbert", "fiction--children's", 2013, true);
	$H0006 = bookForm(10303, "Eating Dirt: Deep Forests, Big Timber, and Life with the Tree-Planting Tribe", "Charlotte Gill", "non-fiction--memoir", 2013, false);
	$H0007 = bookForm(10304, "Pink Ribbons, Inc.: Breast Cancer and the Politics of Philanthropy", "Samantha King", "non-fiction", 2013, false);
	$H0008 = bookForm(10305, "Wild: From Lost to Found on the Pacific Crest Trail", "Cheryl Strayed", "non-fiction--memoir", 2013, false);
	$H0009 = bookForm(10306, "Alif the Unseen", "G. Willow Wilson", "fiction", 2013, true); 
	$H0010 = bookForm(10307, "The Thousand Autumns of Jacob de Zoet", "David Mitchell", "fiction", 2013, true); 
	$H0011 = bookForm(10308, "Drift: The Unmooring of American Military Power", "Rachel Maddow", "non-fiction", 2013, true); 
	$H0012 = bookForm(10309, "The Final Confession of Mabel Stark", "Robert Hough", "fiction", 2013, false);
	$H0013 = bookForm(10310, "Bossypants", "Tina Fey", "fiction--memoir", 2013, false); 
	$H0014 = bookForm(10311, "All Over Creation", "Ruth Ozeki", "fiction", 2013, false);
	$H0015 = bookForm(10312, "The Tipping Point", "Malcolm Gladwell", "non-fiction", 2013, false);
	$H0016 = bookForm(10313, "I Love Dick", "Chris Kraus", "fiction", 2013, false);
	$H0017 = bookForm(10314, "The Sun Also Rises", "Ernest Hemingway", "fiction--classic", 2013, false);
	$H0018 = bookForm(10315, "Shadow Divers: The True Adventure of Two Americans Who Risked Everything to Solve One of the Last Mysteries of World War II", "Robert Kurson", "non-fiction", 2013, false);
	$H0019 = bookForm(10316, "Arcadia", "Lauren Groff", "fiction", 2013, false);
	$H0020 = bookForm(10317, "Mr. Fox", "Helen Oyeyemi", "fiction", 2013, false);
	$H0021 = bookForm(10318, "The Baker Street Translation", "Michael Robertson", "fiction--mystery", 2013, false);
	$H0022 = bookForm(10319, "The Boy in the Moon: A Father's Search for His Disabled Son", "Ian Brown", "non-fiction", 2013, false);
	$H0023 = bookForm(10320, "Walden", "Henry David Thoreau", "non-fiction", 2013, false);
	$H0024 = bookForm(10321, "We Learn Nothing: Essays and Cartoons", "Tim Kreider", "non-fiction--essays", 2013, true);
	$H0025 = bookForm(10322, "Divergent", "Veronica Roth", "fiction--young adult fantasy", 2013, false); 
	$H0026 = bookForm(10323, "Insurgent", "Veronica Roth", "fiction--young adult fantasy", 2013, false);
	$H0027 = bookForm(10324, "Becoming Human", "Jean Vanier", "non-fiction", 2013, false); 
	$H0028 = bookForm(10325, "Why Does the World Exist? An Existential Detective Story", "Jim Holt", "non-fiction", 2013, false);
	$H0029 = bookForm(10326, "The Black Echo", "Michael Connelly", "fiction--mystery", 2013, false);
	$H0030 = bookForm(10327, "A is for Alibi", "Sue Grafton", "fiction--mystery", 2013, false); 
	$H0031 = bookForm(10328, "It's So Easy, and Other Lies", "Duff McKagan", "non-fiction--memoir", 2013, false);
	$H0032 = bookForm(10329, "The Black Ice", "Michael Connelly", "fiction--mystery", 2013, false);
	$H0033 = bookForm(10330, "Far From the Tree: Parents, Children and the Search for Identity", "Andrew Solomon", "non-fiction", 2013, false);
	$H0034 = bookForm(10331, "Feed", "Mira Grant", "fiction--science fiction", 2013, false);
	$H0035 = bookForm(10332, "B is for Burglar", "Sue Grafton", "fiction--mystery", 2013, false);
	$H0036 = bookForm(10333, "The Little Prince", "Antoine de Saint-Exupery", "fiction--children's", 2013, true);
	$H0037 = bookForm(10334, "A People's History of the United States (to the Robber Barons chapter)", "Howard Zinn", "non-fiction--American history", 2013, false);
	$H0038 = bookForm(10335, "The Big Short: Inside the Doomsday Machine", "Michael Lewis", "non-fiction", 2013, false);
	$H0039 = bookForm(10336, "TransAtlantic", "Colum McCann", "fiction", 2013, false);
	$H0040 = bookForm(10337, "The Ocean at the End of the Lane", "Neil Gaiman", "fiction--fantasy", 2013, true);
	$H0041 = bookForm(10338, "Deadline", "Mira Grant", "fiction--science fiction", 2013, false);
	$H0042 = bookForm(10339, "Blackout", "Mira Grant", "fiction--science fiction", 2013, false);
	$H0043 = bookForm(10340, "High Price: A Neuroscientist's Journey of Self-Discovery That Challenges Everything You Know About Drugs and Society", "Dr. Carl Hart", "non-fiction", 2013, false);
	$H0044 = bookForm(10341, "The Sisters Brothers", "Patrick DeWitt", "fiction--Western", 2013, true);
	$H0045 = bookForm(10342, "The Road", "Cormac McCarthy", "fiction", 2013, false);
	$H0046 = bookForm(10343, "Moonwalking With Einstein: The Art and Science of Remembering Everything", "Joshua Foer", "non-fiction", 2013, false);
	$H0047 = bookForm(10344, "The Cuckoo's Calling", "Robert Galbraith (aka J.K. Rowling)", "fiction--mystery", 2013, false);
	$H0048 = bookForm(10345, "Come, Thou Tortoise", "Jessica Grant", "fiction", 2013, false);
	$H0049 = bookForm(10346, "Nothing to Envy: Ordinary Lives in North Korea", "Barbara Demick", "non-fiction", 2013, true);

	$books = [$H0001, $H0002, $H0003, $H0004, $H0005, $H0006, $H0007, $H0008, $H0009, $H0010, $H0011, $H0012, $H0013, $H0014, $H0015, $H0016, $H0017, $H0018, $H0019, $H0020, $H0021, $H0022, $H0023, $H0024, $H0025, $H0026, $H0027, $H0028, $H0029, $H0030, $H0031, $H0032, $H0033, $H0034, $H0035, $H0036, $H0037, $H0038, $H0039, $H0040, $H0041, $H0042, $H0043, $H0044, $H0045, $H0046, $H0047, $H0048, $H0049];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2013</h2>

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
