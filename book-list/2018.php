<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$M0001 = bookForm(10491, "Aloft", "Chang-Rae Lee", "fiction", 2018, true);
	$M0002 = bookForm(10492, "A Wrinkle in Time", "Madeleine L'Engle", "fiction--young adult fantasy", 2018, true);
	$M0003 = bookForm(10493, "The Outsiders", "S.E. Hinton", "fiction--young adult", 2018, false);
	$M0004 = bookForm(10494, "Larry's Party", "Carol Shields", "fiction", 2018, true);
	$M0005 = bookForm(10495, "The Cottingley Secret", "Hazel Gaynor", "fiction", 2018, false);
	$M0006 = bookForm(10496, "Artemis", "Andy Weir", "fiction--science fiction", 2018, true);
	$M0007 = bookForm(10497, "The City of Brass", "S.A. Chakraborty", "fiction--speculative", 2018, true);
	$M0008 = bookForm(10498, "Spineless: The Science of Jellyfish and the Art of Growing a Backbone", "Juli Berwald", "non-fiction--science", 2018, true);
	$M0009 = bookForm(10499, "The Golden Spruce: A True Story of Myth, Madness, and Greed", "John Vaillant", "non-fiction--history", 2018, false);
	$M0010 = bookForm(10500, "The Windup Girl", "Paolo Bacigalupi", "fiction--science fiction", 2018, true);
	$M0011 = bookForm(10501, "Gentlemen of the Road", "Michael Chabon", "fiction", 2018, false);
	$M0012 = bookForm(10502, "Americanah", "Chimamanda Ngozi Adichie", "fiction", 2018, true);
	$M0013 = bookForm(10503, "Cloud Atlas", "David Mitchell", "fiction", 2018, true);
	$M0014 = bookForm(10504, "My Name is Lucy Barton", "Elizabeth Strout", "fiction", 2018, true);
	$M0015 = bookForm(10505, "The History of Bees", "Maja Lunde", "fiction", 2018, false);
	$M0016 = bookForm(10506, "American War", "Omar El Akkad", "fiction", 2018, true);
	$M0017 = bookForm(10507, "The Amazons: Lives & Legends of Warrior Women Across the Ancient World", "Adrienne Mayor", "non-fiction--history", 2018, true);
	$M0018 = bookForm(10508, "Red Notice: A True Story of High Finance, Murder, and One Man's Fight for Justice", "Bill Browder", "non-fiction", 2018, false);
	$M0019 = bookForm(10509, "Russian Roulette: The Inside Story of Putin's War on America and the Election of Donald Trump", "Michael Isikoff & David Corn", "non-fiction--American politics", 2018, false);
	$M0020 = bookForm(10510, "The Stranger in the Woods: The Extraordinary Story of the Last True Hermit", "Michael Finkel", "non-fiction", 2018, true);
	$M0021 = bookForm(10511, "Harry Potter and the Sorcerer's Stone", "J.K. Rowling", "fiction--young adult fantasy", 2018, true);
	$M0022 = bookForm(10512, "Harry Potter and the Chamber of Secrets", "J.K. Rowling", "fiction--young adult fantasy", 2018, true);	
	$M0023 = bookForm(10513, "Harry Potter and the Prisoner of Azkaban", "J.K. Rowling", "fiction--young adult fantasy", 2018, true);	
	$M0024 = bookForm(10514, "Next Year For Sure", "Zoey Leigh Peterson", "fiction", 2018, false);
	$M0025 = bookForm(10515, "Harry Potter and the Goblet of Fire", "J.K. Rowling", "fiction--young adult fantasy", 2018, true);	
	$M0026 = bookForm(10516, "I'll Be Gone in the Dark: One Woman's Obsessive Search for the Golden State Killer", "Michelle McNamara", "non-fiction--true crime", 2018, true);
	$M0027 = bookForm(10517, "Harry Potter and the Order of the Phoenix", "J.K. Rowling", "fiction--young adult fantasy", 2018, true);	
	$M0028 = bookForm(10518, "Sing, Unburied, Sing", "Jesmyn Ward", "fiction", 2018, true);
	$M0029 = bookForm(10519, "Harry Potter and the Half Blood Prince", "J.K. Rowling", "fiction--young adult fantasy", 2018, true);	
	$M0030 = bookForm(10520, "Harry Potter and the Deathly Hallows", "J.K. Rowling", "fiction--young adult fantasy", 2018, true);	
	$M0031 = bookForm(10521, "George Washington's Secret Six: The Spy Ring that Saved the American Revolution", "Brian Kilmeade & Don Yaeger", "non-fiction--American history", 2018, false);
	$M0032 = bookForm(10522, "Better Now: Six Big Ideas to Improve Health Care for All Canadians", "Dr. Danielle Martin", "non-fiction", 2018, true);
	$M0033 = bookForm(10523, "The Bedlam Stacks", "Natasha Pulley", "fiction", 2018, true);
	$M0034 = bookForm(10524, "Pachinko", "Min Jin Lee", "fiction", 2018, false);
	$M0035 = bookForm(10525, "Murder on the Orient Express", "Agatha Christie", "fiction--mystery", 2018, true);
	$M0036 = bookForm(10526, "Alone Time: Four Seasons, Four Cities, and the Pleasures of Solitude", "Stephanie Rosenbloom", "non-fiction--travel, memoir", 2018, true);
	$M0037 = bookForm(10527, "The Fellowship of the Ring", "J.R.R. Tolkien", "fiction--fantasy", 2018, true);
	$M0038 = bookForm(10528, "Dietland", "Sarai Walker", "fiction", 2018, true);
	$M0039 = bookForm(10529, "Barkskins", "Annie Proulx", "fiction", 2018, true);
	$M0040 = bookForm(10530, "Lethal White", "Robert Galbraith", "fiction--mystery", 2018, false);
	$M0041 = bookForm(10531, "The Association of Small Bombs", "Karan Mahajan", "fiction", 2018, true);
	$M0042 = bookForm(10532, "The Eyre Affair", "Jasper Fforde", "fiction--mystery", 2018, true);
	$M0043 = bookForm(10533, "Behind the Throne", "K.B. Wagers", "fiction--science fiction", 2018, false);
	$M0044 = bookForm(10534, "Odyssey", "Homer; translated by Stanley Lombardo", "fiction--mythology", 2018, true);

	$books = [$M0001, $M0002, $M0003, $M0004, $M0005, $M0006, $M0007, $M0008, $M0009, $M0010, $M0011, $M0012, $M0013, $M0014, $M0015, $M0016, $M0017, $M0018, $M0019, $M0020, $M0021, $M0022, $M0023, $M0024, $M0025, $M0026, $M0027, $M0028, $M0029, $M0030, $M0031, $M0032, $M0033, $M0034, $M0035, $M0036, $M0037, $M0038, $M0039, $M0040, $M0041, $M0042, $M0043, $M0044];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2018</h2>

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
