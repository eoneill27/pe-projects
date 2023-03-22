<?php
	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}
?>

<video-content class="<?=$moduleClass?>">
	
	<?php if(isset($module['subTop'])) {
		$subTopClass = $module['subTopClass'];
		$subTop = $module['subTop'];
	?>
	<p class="<?=$subTopClass?>"><?=$subTop?></p>
	<?php } ?>

	<?php if(isset($module['heading'])) {
		$heading = $module['heading'];
		$headingClass = $module['headingClass']; ?>

	<h2 class="<?=$headingClass?>"><?=$heading?></h2>
	<?php } ?>

	<?php if(isset($module['subBottom'])) {
		$subBottomClass = $module['subBottomClass'];
		$subBottom = $module['subBottom'];
	?>
	<p class="<?=$subBottomClass?>"><?=$subBottom?></p>
	<?php } ?>

	<?php if(isset($module['videoSrc'])) {
		$videoClass = $module['videoClass'];
		$videoSrc = $module['videoSrc'];
		$videoWidth = $module['videoWidth'];
		$videoPoster = $module['videoPoster']; ?>

	<video class="<?=$videoClass?>" src="<?=$videoSrc?>" width="<?=$videoWidth?>" poster="<?=$videoPoster?>">
		<p class="reading-voice">Sorry, your browser doesn't support embedded videos.</p>
	</video>

	<?php }?>

</video-content>


