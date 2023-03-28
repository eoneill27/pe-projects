<?php
	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}
?>

<call-action class="<?=$moduleClass?>">

	<?php if(isset($module['ctaImgSrc'])) {
		$ctaImgSrc = $module['ctaImgSrc']; ?>

	<picture class="cta-img">
		<img src="<?=$ctaImgSrc?>" alt="">
	</picture>

	<?php } ?>

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

	<div class="cta-links">

		<?php if(isset($module['links'])) {
			$links = $module['links'];
			foreach($links as $link) {
				$linkTitle = $link['link'];
				$linkClass = $link['linkClass'];
				$linkURL = $link['linkUrl']; ?>

		<a href="<?=$linkURL?>" class="<?=$linkClass?>"><?=$linkTitle?></a>

		<?php }} ?>

	</div>
	
</call-action>
