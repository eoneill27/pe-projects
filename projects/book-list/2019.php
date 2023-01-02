<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$N0001 = bookForm(10535, "Circe", "Madeline Miller", "fiction", 2019, true);
	$N0002 = bookForm(10536, "Red Rising", "Pierce Brown", "fiction--science fiction", 2019, false);
	$N0003 = bookForm(10537, "The Person You Mean to Be: How Good People Fight Bias", "Dolly Chugh", "non-fiction", 2019, false);
	$N0004 = bookForm(10538, "One Of Us is Lying", "Karen M. McManus", "fiction--young adult", 2019, false);
	$N0005 = bookForm(10539, "Lost in a Good Book: A Thursday Next Novel", "Jasper Fforde", "fiction", 2019, true);
	$N0006 = bookForm(10540, "The Handmaid's Tale", "Margaret Atwood", "fiction", 2019, true);
	$N0007 = bookForm(10541, "A History of Canada in Ten Maps: Epic Stories of Charting a Mysterious Land", "Adam Shoalts", "non-fiction--Canadian history", 2019, true);
	$N0008 = bookForm(10542, "Eating Animals", "Jonathan Safran Foer", "non-fiction", 2019, true);
	$N0009 = bookForm(10543, "How Fascism Works: The Politics of Us and Them", 
		"Jason Stanley", "non-fiction", 2019, false);
	$N0010 = bookForm(10544, "A Discovery of Witches", "Deborah Harkness", "fiction--fantasy", 2019, false);
	$N0011 = bookForm(10545, "Full Disclosure", "Beverley McLachlin", "fiction--mystery", 2019, false);
	$N0012 = bookForm(10546, "These Truths: A History of the United States", "Jill Lepore", "non-fiction--American history", 2019, true);
	$N0013 = bookForm(10547, "Orphan X", "Gregg Hurwitz", "fiction--thriller", 2019, true);
	$N0014 = bookForm(10548, "I Might Regret This: Essays, Drawings, Vulnerabilities, and Other Stuff", "Abbi Jacobson", "non-fiction", 2019, true);
	$N0015 = bookForm(10549, "The Well of Lost Plots", "Jasper Fforde", "fiction", 2019, false);
	$N0016 = bookForm(10550, "The Gloaming", "Melanie Finn", "fiction", 2019, true);
	$N0017 = bookForm(10551, "Mister Monkey", "Francine Prose", "fiction", 2019, true);
	$N0018 = bookForm(10552, "The Last Painting of Sara de Vos", "Dominic Smith", "fiction", 2019, true);
	$N0019 = bookForm(10553, "There There", "Tommy Orange", "fiction", 2019, true);
	$N0020 = bookForm(10554, "Mr. Splitfoot", "Samantha Hunt", "fiction", 2019, true);
	$N0021 = bookForm(10555, "Motherhood", "Sheila Heti", "fiction", 2019, true);
	$N0022 = bookForm(10556, "Educated", "Tara Westover", "non-fiction--memoir", 2019, false);
	$N0023 = bookForm(10557, "The Underground Railroad", "Colson Whitehead", "fiction", 2019, true);
	$N0024 = bookForm(10558, "Pennyroyal Academy", "M.A. Larson", "fiction--young adult fantasy", 2019, false);
	$N0025 = bookForm(10559, "Neverwhere", "Neil Gaiman", "fiction--fantasy", 2019, true);
	$N0026 = bookForm(10560, "Before the Fall", "Noah Hawley", "fiction", 2019, true);
	$N0027 = bookForm(10561, "Monkey Beach", "Eden Robinson", "fiction", 2019, true);
	$N0028 = bookForm(10562, "Floating Like the Dead", "Yasuko Thanh", "fiction--short story", 2019, false);
	$N0029 = bookForm(10563, "Lincoln in the Bardo", "George Saunders", "fiction", 2019, true);
	$N0030 = bookForm(10564, "The Oregon Trail: A New American Journey", "Rinker Buck", "non-fiction", 2019, true);
	$N0031 = bookForm(10565, "Fifteen Dogs", "Andre Alexis", "fiction", 2019, true);
	$N0032 = bookForm(10566, "Swing Time", "Zadie Smith", "fiction", 2019, false);
	$N0033 = bookForm(10567, "The Testaments", "Margaret Atwood", "fiction", 2019, true);
	$N0034 = bookForm(10568, "Tenth of December", "George Saunders", "fiction--short story", 2019, true);
	$N0035 = bookForm(10569, "You Will Be Safe Here", "Damian Barr", "fiction", 2019, true);
	$N0036 = bookForm(10570, "Bad Blood: Secrets and Lies in a Silicon Valley Startup", "John Carreyrou", "non-fiction", 2019, false);
	$N0037 = bookForm(10571, "Wanderlust: A History of Walking", "Rebecca Solnit", "non-fiction", 2019, false);
	$N0038 = bookForm(10572, "Inconspicuous Consumption: The Environmental Impact You Don't Know You Have", "Tatiana Schlossberg", "non-fiction", 2019, false);
	$N0039 = bookForm(10573, "Commonwealth", "Ann Patchett", "fiction", 2019, true);
	$N0040 = bookForm(10574, "The Jade Peony", "Wayson Chung", "fiction", 2019, false);

	$books = [$N0001, $N0002, $N0003, $N0004, $N0005, $N0006, $N0007, $N0008, $N0009, $N0010, $N0011, $N0012, $N0013, $N0014, $N0015, $N0016, $N0017, $N0018, $N0019, $N0020, $N0021, $N0022, $N0023, $N0024, $N0025, $N0026, $N0027, $N0028, $N0029, $N0030, $N0031, $N0032, $N0033, $N0034, $N0035, $N0036, $N0037, $N0038, $N0039, $N0040];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2019</h2>

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
