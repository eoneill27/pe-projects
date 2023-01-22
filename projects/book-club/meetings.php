<?php include ("site-nav.php"); ?>

<?php
	$order = NULL;

	if (isset($_GET["order"])) {
			$order = $_GET["order"];
		}
?>

<h1 class="heyyou-voice">Past Meetings</h1>

<div class="order-sort">
	<a class="nav-voice <?php if($order === "ascending") {echo "active";} ?>" href="?page=meetings&order=ascending">Oldest first</a>
	<a class="nav-voice <?php if($order === "descending") {echo "active";} ?>" href="?page=meetings&order=descending">Newest first</a>
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

<?php include ("functions.php"); ?>

<ul class="meeting-grid">

<?php include ("meeting-card.php"); ?>

</ul>



<?php include ("footer.php"); ?>

