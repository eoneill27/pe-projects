<section class="video-grid">

<?php

include("videoData.php");

$videos = [$video001, $video002, $video003, $video004, $video005, $video006, $video007, $video008, $video009, $video010, $video011, $video012, $video014, $video015, $video016, $video017, $video018, $video019, $video020, $video021, $video022, $video023, $video024, $video025, $video026, $video027, $video028, $video029, $video030, $video031, $video032, $video033, $video034, $video035, $video036, $video037, $video038, $video039, $video040];

foreach ($videos as $video) {
	$id = $video["id"];
	$title = $video["title"];
	$date = $video["date"];
	$runTime = $video["runTime"];
	$imageSrc = $video["image"]["src"];
	$imageAlt = $video["image"]["altText"];
	$link = $video["link"];
?>

<div class="video-card">
	<picture class="vid-thumb">
		<a href="<?=$link?>" target="_blank">
			<img src="<?=$imageSrc?>" alt="<?=$imageAlt?>">
		</a>
	</picture>
	<h2 class="vid-title-voice"><?=$title?></h2>
	<p class="vid-meta-voice"><?=$date?>&nbsp;<span>&#124;</span>
	<?=$runTime?></p>
</div>



<?php } ?>

</section>