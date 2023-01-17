
<h1 class="heyyou-voice">Past Meetings</h1>

<?php include ("data/meetings.php"); ?>

<section class="meeting-grid">

<?php 

	foreach ($meetingArray as $meeting) { 
		$id = $meeting["id"];
		$date = $meeting["date"];
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
	
		<meeting-card>
			<a href="?page=detail&id=<?=$id?>">
			<picture class="book-cover">
				<img src="<?=$cover?>" alt="">
			</picture>
			<div class="card-info">
				<h2 class="attention-voice"><?=$title?></h2>
				<h3 class="info-voice"><?=$date?></h3>
				<h4 class="host-voice"><?=$host?></h4>
			</div>
			</a>
		</meeting-card>

	<?php } ; ?>

</section>