
<h1 class="heyyou-voice">Past Meetings</h1>

<?php include ("data/meeting-data.php"); ?>

<section >
	<ul class="meeting-grid">
<?php 

	foreach ($meetingArray as $meeting) { 
		$meetingId = $meeting["id"];
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
	
		
		<li class="meeting">
			<meeting-card>
				<a href="?page=detail&meeting=<?=$meetingId?>">
					<picture class="book-cover">
						<img src="<?=$cover?>" alt="">
					</picture>
					<div class="card-info">
						<h2 class="title attention-voice"><?=$title?></h2>
						<h3 class="meeting-date info-voice"><?=$date?></h3>
						<h4 class="host host-voice"><?=$host?></h4>
					</div>
				</a>
			</meeting-card>
		</li>

	<?php } ; ?>
	</ul>
</section>