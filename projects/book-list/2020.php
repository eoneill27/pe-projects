<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$O0001 = bookForm(10575, "Janis: Her Life and Music", "Holly George-Warren", "non-fiction--biography, music history", 2020, true);
	$O0002 = bookForm(10576, "God Save the Queens: The Essential History of Women in Hip-Hop", "Kathy Iandoli", "non-fiction--music history", 2020, true); 
	$O0003 = bookForm(10577, "From Where I Stand: Rebuilding Indigenous Nations for a Stronger Canada", "Jody Wilson-Raybould", "non-fiction", 2020, false);
	$O0004 = bookForm(10578, "City of Girls", "Elizabeth Gilbert", "fiction", 2020, false);
	$O0005 = bookForm(10579, "Paul Simon: The Life", "Robert Hilburn", "non-fiction--biography, music history", 2020, false);
	$O0006 = bookForm(10580, "A Student of Weather", "Elizabeth Hay", "fiction", 2020, true);
	$O0007 = bookForm(10581, "In a Dark, Dark Wood", "Ruth Ware", "fiction--thriller", 2020, false);
	$O0008 = bookForm(10582, "The Woman in Cabin 10", "Ruth Ware", "fiction--thriller", 2020, false);
	$O0009 = bookForm(10583, "The Sweetness at the Bottom of the Pie", "Alan Bradley", "fiction--mystery", 2020, true);
	$O0010 = bookForm(10584, "Himself", "Jess Kidd", "fiction", 2020, true);
	$O0011 = bookForm(10585, "Midnight Riot", "Ben Aaronovitch", "fiction--detective", 2020, true);
	$O0012 = bookForm(10586, "The Immortalists", "Chloe Benjamin", "fiction", 2020, true);
	$O0013 = bookForm(10587, "Mossflower", "Brian Jacques", "fiction--young adult fantasy", 2020, true);
	$O0014 = bookForm(10588, "Special Topics in Calamity Physics", "Marisha Pessl", "fiction", 2020, false);
	$O0015 = bookForm(10589, "The Sybil in Her Grave", "Sarah Caudwell", "fiction--mystery", 2020, true);
	$O0016 = bookForm(10590, "People of the Book", "Geraldine Brooks", "fiction", 2020, true);
	$O0017 = bookForm(10591, "The Lacuna", "Barbara Kingsolver", "fiction", 2020, true);
	$O0018 = bookForm(10592, "One Good Turn", "Kate Atkinson", "fiction--mystery", 2020, true);
	$O0019 = bookForm(10593, "Between the World and Me", "Ta-Nehisi Coates", "non-fiction--memoir, anti-racism", 2020, true);
	$O0020 = bookForm(10594, "Untamed", "Glennon Doyle", "non-fiction--memoir", 2020, false);
	$O0021 = bookForm(10595, "How to Be an Antiracist", "Ibram X. Kendi", "non-fiction--antiracism", 2020, true);
	$O0022 = bookForm(10596, "Catch and Kill: Lies, Spies, and a Conspiracy to Protect Predators", "Ronan Farrow", "non-fiction", 2020, true);
	$O0023 = bookForm(10597, "So You Want to Talk About Race", "Iljeoma Oluo", "non-fiction", 2020, true);
	$O0024 = bookForm(10598, "The Wicked Enchantment", "Margot Benary-Isbert", "fiction--children's", 2020, true);
	$O0025 = bookForm(10599, "11/22/63", "Stephen King", "fiction", 2020, true);
	$O0026 = bookForm(10600, "Lost Light", "Michael Connelly", "fiction--detective", 2020, false);
	$O0027 = bookForm(10601, "The King at the Edge of the World", "Arthur Phillips", "fiction", 2020, true);
	$O0028 = bookForm(10602, "Devil in a Blue Dress", "Walter Mosley", "fiction--detective", 2020, true);
	$O0029 = bookForm(10603, "Ascending Peculiarity: Edward Gorey on Edward Gorey", "Karen Wilkin, ed.", "non-fiction", 2020, false);
	$O0030 = bookForm(10604, "The Leavers", "Lisa Ko", "fiction", 2020, true);
	$O0031 = bookForm(10605, "Children of Blood and Bone", "Tomi Adeyemi", "fiction--young adult fantasy", 2020, false);
	$O0032 = bookForm(10606, "Where the Crawdads Sing", "Delia Owens", "fiction", 2020, false);
	$O0033 = bookForm(10607, "Washington Black", "Esi Edugyan", "fiction", 2020, true);
	$O0034 = bookForm(10608, "A Brief History of Seven Killings", "Marlon James", "fiction", 2020, false);
	$O0035 = bookForm(10609, "Westside", "W.M. Akers", "fiction--fantasy", 2020, true);
	$O0036 = bookForm(10610, "The Magician's Assistant", "Ann Patchett", "fiction", 2020, true);
	$O0037 = bookForm(10611, "Down the River Unto the Sea", "Walter Mosley", "fiction--detective", 2020, false);
	$O0038 = bookForm(10612, "Life of a Klansman: A Family History in White Supremacy", "Edward Ball", "non-fiction--American history", 2020, true);
	$O0039 = bookForm(10613, "Black Leopard, Red Wolf", "Marlon James", "fiction--fantasy", 2020, true);
	$O0040 = bookForm(10614, "The Girl Who Circumnavigated Fairyland in a Ship of Her Own Making", "Catherynne M. Valente", "fiction--fantasy", 2020, false);
	$O0041 = bookForm(10615, "Prague", "Arthur Phillips", "fiction", 2020, false);
	$O0042 = bookForm(10616, "Life Undercover: Coming of Age in the CIA", "Amaryllis Fox", "non-fiction", 2020, false);
	$O0043 = bookForm(10617, "A Song of Wraiths and Ruin", "Roseanne A. Brown", "fiction--young adult fantasy", 2020, false);
	$O0044 = bookForm(10618, "Milkman", "Anna Burns", "fiction", 2020, true);
	$O0045 = bookForm(10619, "Homeland Elegies", "Ayad Akhtar", "fiction", 2020, true); 
	$O0046 = bookForm(10620, "Utopia Avenue", "David Mitchell", "fiction", 2020, true);

	$books = [$O0001, $O0002, $O0003, $O0004, $O0005, $O0006, $O0007, $O0008, $O0009, $O0010, $O0011, $O0012, $O0013, $O0014, $O0015, $O0016, $O0017, $O0018, $O0019, $O0020, $O0021, $O0022, $O0023, $O0024, $O0025, $O0026, $O0027, $O0028, $O0029, $O0030, $O0031, $O0032, $O0033, $O0034, $O0035, $O0036, $O0037, $O0038, $O0039, $O0040, $O0041, $O0042, $O0043, $O0044, $O0045, $O0046];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2020</h2>

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
