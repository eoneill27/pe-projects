<?php include('header.php'); ?>
<?php include('book-form.php'); ?>

<?php

	$J0001 = bookForm(10388, "The Sixth Extinction: An Unnatural History", "Elizabeth Kolbert", "non-fiction--science", 2015, true);
	$J0002 = bookForm(10389, "The Goldfinch", "Donna Tartt", "fiction", 2015, false);
	$J0003 = bookForm(10390, "Matilda", "Roald Dahl", "fiction--children's", 2015, true);
	$J0004 = bookForm(10391, "Wolf in White Van", "John Darnielle", "fiction", 2015, true);
	$J0005 = bookForm(10392, "The Terrible Two", "Jory John & Mac Barnett", "fiction--children's", 2015, false);
	$J0006 = bookForm(10393, "Skippy Dies", "Paul Murray", "fiction", 2015, true);
	$J0007 = bookForm(10394, "The Madonnas of Leningrad", "Debra Dean", "fiction--historical", 2015, false);
	$J0008 = bookForm(10395, "Kill the Messsengers: Stephen Harper's Assault on Your Right to Know", "Mark Bourrie", "non-fiction--Canadian politics", 2015, false);
	$J0009 = bookForm(10396, "The Prose Edda", "Snorri Sturluson (trans. Jesse Byock)", "fiction--mythology", 2015, false);
	$J0010 = bookForm(10397, "Shadow Scale", "Rachel Hartman", "fiction--fantasy", 2015, false);
	$J0011 = bookForm(10398, "A History of the World in 6 Glasses", "Tom Standage", "non-fiction", 2015, false);
	$J0012 = bookForm(10399, "No Kids: 40 Good Reasons Not to Have Children", "Corinne Maier", "non-fiction", 2015, false);
	$J0013 = bookForm(10400, "Cutting for Stone", "Abraham Verghese", "fiction", 2015, false);
	$J0014 = bookForm(10401, "Not That Kind of Girl: A Young Woman Tells You What She's 'Learned'", "Lena Dunham", "non-fiction--memoir", 2015, false);
	$J0015 = bookForm(10402, "The Wallcreeper", "Nell Zink", "fiction", 2015, false);
	$J0016 = bookForm(10403, "Room", "Emma Donoghue", "fiction", 2015, false);
	$J0017 = bookForm(10404, "Spinster: Making a Life of One's Own", "Kate Bolick", "non-fiction", 2015, false);
	$J0018 = bookForm(10405, "Selfish, Shallow, and Self-Absorbed: Sixteen Writers on the Decision Not to Have Kids", "Meghan Daum, editor", "non-fiction", 2015, true);
	$J0019 = bookForm(10406, "Loitering: New and Collected Essays", "Charles D'Ambrosio", "non-fiction--essays", 2015, false);
	$J0020 = bookForm(10407, "The Queen of the Tearling", "Erika Johansen", "fiction--fantasy", 2015, true);
	$J0021 = bookForm(10408, "Pandaemonium", "Christopher Brookmyre", "fiction", 2015, true);
	$J0022 = bookForm(10409, "In the Unlikely Event", "Judy Blume", "fiction--historical", 2015, false);
	$J0023 = bookForm(10410, "Mislaid", "Nell Zink", "fiction", 2015, true);
	$J0024 = bookForm(10411, "Girl at War", "Sara Novic", "fiction", 2015, false);
	$J0025 = bookForm(10412, "The Invasion of the Tearling", "Erika Johansen", "fiction--fantasy", 2015, true);
	$J0026 = bookForm(10413, "The Water Knife", "Paolo Bacigalupi", "fiction", 2015, false);
	$J0027 = bookForm(10414, "Daydreams of Angels", "Heather O'Neill", "fiction--short story", 2015, true);
	$J0028 = bookForm(10415, "Ghettoside: A True Story of Murder in America", "Jill Leovy", "non-fiction", 2015, true);
	$J0029 = bookForm(10416, "The Unfortunates", "Sophie McManus", "fiction", 2015, false);
	$J0030 = bookForm(10417, "Purity", "Jonathan Franzen", "fiction", 2015, false);
	$J0031 = bookForm(10418, "The Art of Fielding", "Chad Harbach", "fiction", 2015, true);
	$J0032 = bookForm(10419, "Lullabies for Little Criminals", "Heather O'Neill", "fiction", 2015, false);
	$J0033 = bookForm(10420, "Undermajordomo Minor", "Patrick DeWitt", "fiction", 2015, false);
	$J0034 = bookForm(10421, "Disclaimer", "Renee Knight", "fiction--thriller", 2015, false);
	$J0035 = bookForm(10422, "Missoula: Rape and the Justice System in a College Town", "Jon Krakauer", "non-fiction", 2015, false);
	$J0036 = bookForm(10423, "The Martian", "Andy Weir", "fiction--science fiction", 2015, false);
	$J0037 = bookForm(10424, "The Girl on the Train", "Paula Hawkins", "fiction--thriller", 2015, false);

	$books = [$J0001, $J0002, $J0003, $J0004, $J0005, $J0006, $J0007, $J0008, $J0009, $J0010, $J0011, $J0012, $J0013, $J0014, $J0015, $J0016, $J0017, $J0018, $J0019, $J0020, $J0021, $J0022, $J0023, $J0024, $J0025, $J0026, $J0027, $J0028, $J0029, $J0030, $J0031, $J0032, $J0033, $J0034, $J0035, $J0036, $J0037];
?>

<inner-column>

	<h2 class="attention-voice">Books read in 2015</h2>

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
