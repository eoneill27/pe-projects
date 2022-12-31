<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$I0001 = bookForm(10347, "Allegiant", "Veronica Roth", "fiction--young adult fantasy", 2014, false);
	$I0002 = bookForm(10348, "Brooklyn", "Colm Toibin", "fiction", 2014, true);
	$I0003 = bookForm(10349, "What is the What", "Dave Eggers", "fiction", 2014, true);
	$I0004 = bookForm(10350, "Ablutions: Notes for a Novel", "Patrick DeWitt", "fiction", 2014, false);
	$I0005 = bookForm(10351, "The Sisters Brothers", "Patrick DeWitt", "fiction--Western", 2014, true);
	$I0006 = bookForm(10352, "The Fault in Our Stars", "John Green", "fiction--young adult", 2014, true);
	$I0007 = bookForm(10353, "'Why Do Only White People Get Abducted by Aliens?' Teaching Lessons From the Bronx", "Ilana Garon", "non-fiction", 2014, false);
	$I0008 = bookForm(10354, "The Examined Life: How We Lose and Find Ourselves", "Stephen Grosz", "non-fiction", 2014, true);
	$I0009 = bookForm(10355, "Lyndon Johnson and the American Dream", "Doris Kearns Goodwin", "non-fiction--biography", 2014, false);
	$I0010 = bookForm(10356, "Georgia Bound", "Frank O'Neill", "fiction--mystery", 2014, false);
	$I0011 = bookForm(10357, "Seraphina", "Rachel Hartman", "fiction--fantasy", 2014, true);
	$I0012 = bookForm(10358, "The Rosie Project", "Graeme Simsion", "fiction", 2014, true);
	$I0013 = bookForm(10359, "It's Not You", "Sara Eckel", "non-fiction", 2014, false);
	$I0014 = bookForm(10359, "My Stroke of Insight: A Brain Scientist's Personal Journey", "Jill Bolte Taylor", "non-fiction--memoir", 2014, false);
	$I0015 = bookForm(10360, "Dark at the Roots: A Memoir", "Sarah Thyre", "non-fiction--memoir", 2014, false);
	$I0016 = bookForm(10361, "Imperial Life in the Emerald City: Inside Iraq's Green Zone", "Rajiv Chandrasekaran", "non-fiction", 2014, true);
	$I0017 = bookForm(10362, "Pilgrim at Tinker Creek", "Annie Dillard", "non-fiction", 2014, true);
	$I0018 = bookForm(10363, "A Tale for the Time Being", "Ruth Ozeki", "fiction", 2014, true);
	$I0019 = bookForm(10364, "The Big Tiny: A Built-it-Myself Memoir", "Dee Williams", "non-fiction--memoir", 2014, true);
	$I0020 = bookForm(10365, "The Amazing Adventures of Kavalier and Clay", "Michael Chabon", "fiction", 2014, true);
	$I0021 = bookForm(10366, "The Lost City of Z: A Tale of Deadly Obsession in the Amazon", "David Grann", "non-fiction", 2014, true);
	$I0022 = bookForm(10367, "Where'd You Go, Bernadette", "Maria Semple", "fiction", 2014, true);
	$I0023 = bookForm(10368, "Life After Life", "Kate Atkinson", "fiction", 2014, true);
	$I0024 = bookForm(10369, "Monoculture: How One Story is Changing Everything", "F.S. Michaels", "non-fiction", 2014, false);
	$I0025 = bookForm(10370, "The Riddle of the Labyrinth: The Quest to Crack an Ancient Code", "Margalit Fox", "non-fiction", 2014, true);
	$I0026 = bookForm(10371, "The Silkworm", "Robert Galbraith (aka J.K. Rowling)", "fiction--mystery", 2014, false);
	$I0027 = bookForm(10372, "Attachments", "Rainbow Rowell", "fiction", 2014, false);
	$I0028 = bookForm(10373, "We Are All Completely Beside Ourselves", "Karen Joy Fowler", "fiction", 2014, true);
	$I0029 = bookForm(10374, "The Orenda", "Joseph Boyden", "fiction--historical fiction", 2014, false);
	$I0030 = bookForm(10375, "Empress Dowager Cixi: The Concubine Who Launched Modern China", "Jung Chang", "non-fiction--Chinese history", 2014, false);
	$I0031 = bookForm(10376, "Five Days at Memorial: Life and Death in a Storm-Ravaged Hospital", "Sheri Fink", "non-fiction", 2014, true);
	$I0032 = bookForm(10377, "A House in the Sky", "Amanda Lindhout & Sara Corbett", "non-fiction--memoir", 2014, false);
	$I0033 = bookForm(10378, "Bruno, Chief of Police", "Martin Walker", "fiction--mystery", 2014, false);
	$I0034 = bookForm(10379, "The Bone Clocks", "David Mitchell", "fiction", 2014, true);
	$I0035 = bookForm(10380, "What I Talk About When I Talk About Running", "Haruki Murakami", "non-fiction--memoir", 2014, false);
	$I0036 = bookForm(10381, "Whiskey Tango Foxtrot", "David Shafer", "fiction", 2014, true);
	$I0037 = bookForm(10382, "Case Histories", "Kate Atkinson", "fiction--mystery", 2014, false);
	$I0038 = bookForm(10383, "The 100", "Kass Morgan", "fiction--young adult science fiction", 2014, false);
	$I0039 = bookForm(10384, "The Giver", "Lois Lowry", "fiction--young adult fantasy", 2014, false);
	$I0040 = bookForm(10385, "Gone Girl", "Gillian Flynn", "fiction--thriller", 2014, true);
	$I0041 = bookForm(10386, "Declare", "Tim Powers", "fiction--speculative", 2014, true); 
	$I0042 = bookForm(10387, "Bark: Stories", "Lorrie Moore", "fiction--short story", 2014, false);

	$books = [$I0001, $I0002, $I0003, $I0004, $I0005, $I0006, $I0007, $I0008, $I0009, $I0010, $I0011, $I0012, $I0013, $I0014, $I0015, $I0016, $I0017, $I0018, $I0019, $I0020, $I0021, $I0022, $I0023, $I0024, $I0025, $I0026, $I0027, $I0028, $I0029, $I0030, $I0031, $I0032, $I0033, $I0034, $I0035, $I0036, $I0037, $I0038, $I0039, $I0040, $I0041, $I0042];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2014</h2>

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
