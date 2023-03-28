<?php
	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}
?>

<video-content class="<?=$moduleClass?>">
	
	<div class="vid-text">

		<?php if(isset($module['subTop'])) {
			$subTopClass = $module['subTopClass'];
			$subTop = $module['subTop'];
		?>
		<h3 class="<?=$subTopClass?>"><?=$subTop?></h3>
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
		<h3 class="<?=$subBottomClass?>"><?=$subBottom?></h3>
		<?php } ?>

	</div>

	<?php if(isset($module['videoSrc'])) {
		$videoClass = $module['videoClass'];
		$videoSrc = $module['videoSrc'];
		$videoWidth = $module['videoWidth'];
		$videoPoster = $module['videoPoster']; ?>

	<video-wrap class="video">
		<video class="<?=$videoClass?>" src="<?=$videoSrc?>" width="<?=$videoWidth?>" poster="<?=$videoPoster?>">
			<p class="reading-voice">Sorry, your browser doesn't support embedded videos.</p>
		</video>
	</video-wrap>
	

	<?php }?>

</video-content>


