<?php

	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}

?>

<graphic-diptych>
	
	<div class="diptych-side1">
		<?php if(isset($module['heading'])) {
			$heading = $module['heading'];
			$headingClass = $module['headingClass']; ?>
		<h2 class="<?=$headingClass?>"><?=$heading?></h2>
		<?php }?>

		<?php if(isset($module['text'])) {
			$text = $module['text'];
			$textClass = $module['textClass']; ?>
		<h3 class="<?=$textClass?>"><?=$text?></h3>
		<?php }?>


		<?php if(isset($module['formID'])) { 
			$formID = $module['formID'];
			$formClass = $module['formClass'];
			$formMethod = $module['formMethod'];
			$formAction = $module['formAction'];
			$inputType = $module['inputType'];
			$inputPlaceholder = $module['inputPlaceholder'];
			$formButtonTitle = $module['formButtonTitle']; ?>
		<form id="<?=$formID?>" class="<?=$formClass?> signup-component" action="<?=$formAction?>" method="<?=$formMethod?>">
			<input type="<?=$inputType?>" placeholder="<?=$inputPlaceholder?>">
			<button type="<?=$formButtonType?>"><?=$formButtonTitle?></button>
		</form>
		<?php } ?>

	</div>

	<div class="diptych-side2">
		<?php if(isset($module['imgSrc'])) {
			$pictureClass = $module['pictureClass'];
			$imgSrc = $module['imgSrc'];
			$imgAlt = $module['imgAlt']; ?>

		<picture class="dip-img <?=$pictureClass?>">
			<img src="<?=$imgSrc?>" alt="<?=$imgAlt?>">
		</picture>
		<?php }?>

	</div>
</graphic-diptych>


