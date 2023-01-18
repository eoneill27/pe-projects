
<h1 class="heyyou-voice">Past Meetings</h1>

<div class="order-sort">
	<a class="moving-voice" href="?page=meetings">Oldest first</a>
	<a class="moving-voice" href="?page=meetings&order=descending">Newest first</a>
</div>

<!-- <a href="?page=meetings&year=2010">2010</a> -->

<?php include ("data/meeting-data.php"); ?>

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
	
	$order = NULL; 
	$year = NULL;

	if (isset($_GET["order"])) {
		$order = $_GET["order"];
	}

	if ($order == "descending") {
		rsort($meetingArray);
	}

	if (isset($_GET["year"])) {
		$year = $_GET["year"];
	}

?>

<?php



?>

<ul class="meeting-grid">
	<?php 

		foreach ($meetingArray as $meeting) { 
			$meetingId = $meeting["id"];
			$date = strtotime($meeting["date"]);
			$host = $meeting["host"];
			$title = $meeting["title"];
			$subtitle = $meeting["subtitle"];
			$author = $meeting["author"];
			$genre = $meeting["genre"];
			$isbn = $meeting["isbn"];
			$cover = $meeting["cover"];
			$gala = $meeting["gala"];
			$notes = $meeting["notes"];
		
			//what to do about adaptations, meetingPhotos, meal, attendees
	
	?>
		
		<li class="meeting">
			<a href="?page=detail&meeting=<?=$meetingId?>">

				<meeting-card>
					<div class="card-info">
						<h2 class="title attention-voice"><?=$title?></h2>
						<h3 class="meeting-date info-voice"><?=date('F d, Y', $date)?></h3>
						<h4 class="host host-voice"><?=$host?></h4>
					</div>

					<picture class="book-cover">
						<img src="<?=$cover?>" alt="">
					</picture>
				</meeting-card>

			</a>
		</li>

	<?php } ; ?>

</ul>
