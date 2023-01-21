<?php include ("site-nav.php"); ?>

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

	<div class="detail-card card">
		<picture class="detail-cover">
			<img src="<?=$detail["cover"]?>" alt="">
		</picture>
		<div class="detail-data">
			<div class="detail-data-top">
				<h1 class="detail-date attention-voice"><?=$detail["date"]?></h1>
				<h2 class="detail-title info-voice"><?=$detail["title"]?></h2>
				<h3 class="detail-subtitle author-voice"><?=$detail["subtitle"]?></h3>
				<h4 class="detail-author author-voice">by <?=$detail["author"]?></h4>
				<h5 class="detail-host info-voice">Hosted by <?=$detail["host"]?></h5>
			</div>

			<div class="detail-data-bottom">
				<p class="detail-notes reading-voice"><span style="font-weight: 500">Notes:</span> <?=$detail["notes"]?></p>
			</div>
		</div>

	</div>

<?php } else { ?>

	<h1 class="heyyou-voice">No meeting found</h1>

<?php } ?>

<?php include ("footer.php"); ?>

