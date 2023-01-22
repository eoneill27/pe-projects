

<?php 

	$order = NULL; 

	if ($page == "meetings") {

		$meetingArray = renderMeetingData();

		if (isset($_GET["order"])) {
			$order = $_GET["order"];
		}
	
		if ($order == "descending") {
			rsort($meetingArray);
		}

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

?>
	
	<li class="meeting">
		<a href="?page=detail&meeting=<?=$meetingId?>">

			<meeting-card class="card">
				<div class="card-info">
					<h2 class="title attention-voice"><?=$title?></h2>
					<h3 class="meeting-date info-voice"><?=date('F j, Y', $date)?></h3>
					<h4 class="host host-voice"><?=$host?></h4>
				</div>

				<picture class="book-cover">
					<img src="<?=$cover?>" alt="">
				</picture>
			</meeting-card>

		</a>
	</li>

<?php }}; ?>







