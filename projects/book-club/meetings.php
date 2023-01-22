<?php include ("site-nav.php"); ?>

<h1 class="heyyou-voice">Past Meetings</h1>

<div class="order-sort">
	<a class="nav-voice" href="?page=meetings">Oldest first</a>
	<a class="nav-voice" href="?page=meetings&order=descending">Newest first</a>
</div>

<!-- <a href="?page=meetings&year=2010">2010</a> -->




<!-- <form action="" method="GET" class="year-select">
	<label for=""year-select">Filter by year</label>
	<select name="year" id="year-select">
		<option value="all" selected>all years</option>
		<option value="2010">2010</option>
		<option value="2011">2011</option>
	</select>
	 <input type="submit" name="submit" value="Choose">
</form> -->

<?php 

	include ("functions.php");

	$order = NULL; 
	$year = NULL;

	$meetings = renderMeetingData();

	

	if (isset($_GET["order"])) {
		$order = $_GET["order"];

		if ($order == "descending") {
			array_reverse($meetings);
		}
	}

	if (isset($_GET["year"])) {
		$year = $_GET["year"];
	}
?>

<ul class="meeting-grid">

<?php include ("meeting-card.php"); ?>

</ul>



<?php include ("footer.php"); ?>

