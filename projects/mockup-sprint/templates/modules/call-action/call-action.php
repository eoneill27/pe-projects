<?php
	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}
?>

<call-action class="<?=$moduleClass?>">

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
