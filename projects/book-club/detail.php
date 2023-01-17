<?php include ("data/meeting-data.php"); ?>

<?php

	if (isset($_GET["meeting"])) {
		$detailMeetingId = $_GET["meeting"];
	}

	foreach ($meetingArray as $meeting) { 
		if ($detailMeetingId == $meeting["id"]) {
			$detail = $meeting;
		}
	}
	
	//if meeting ID in URL matches meeting ID of meeting that is being looped through, you've found the right meeting - do this.
?>

<?php if(isset($detail)) { ?>

	<h1 class="heyyou-voice"><?=$detail["date"]?></h1>
	<h2 class="attention-voice"><?=$detail["host"]?></h2>

	<div class="detail-card">
		<picture class="detail-cover">
			<img src="<?=$detail["cover"]?>" alt="">
		</picture>
		<div class="detail-data">
			<h3 class="info-voice"><?=$detail["title"]?></h3>
			<h4 class="author-voice"><?=$detail["author"]?></h4>

			<p class="reading-voice"><?=$detail["notes"]?></p>
		</div>

	</div>

<?php } else { ?>

	<h1 class="heyyou-voice">No meeting found</h1>

<?php } ?>

