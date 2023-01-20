<?php include ("site-nav.php"); ?>

<h1 class="home-heading heyyou-voice">Poison Raisins Forever!</h1>

<?php

	include ("data/meeting-data.php");

	$nextMeetings = array_slice($meetingArray, -1);

	foreach ($nextMeetings as $nextMeeting) {
		$nextDate = $nextMeeting["date"];
		$nextHost = $nextMeeting["host"];
		$nextTitle = $nextMeeting["title"];
		$nextAuthor = $nextMeeting["author"];
	}

?>

<div class="next-meeting">
	<h2 class="attention-voice">NEXT MEETING:</h2>
	<p class="info-voice"><?=$nextDate?> at <?=$nextHost?>'s</p>

	<h2 class="attention-voice">NEXT BOOK:</h2>
	<p class="info-voice"><span style="font-style: italic"><?=$nextTitle?></span> by <?=$nextAuthor?></p>
</div>


<?php include ("footer.php"); ?>