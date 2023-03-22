
<!-- signup component -->

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



<!-- image --> 

		<?php if(isset($module['imgSrc'])) {
			$pictureClass = $module['pictureClass'];
			$imgSrc = $module['imgSrc'];
			$imgAlt = $module['imgAlt']; ?>

		<picture class="<?=$pictureClass?>">
			<img src="<?=$imgSrc?>" alt="<?=$imgAlt?>">
		</picture>
		<?php }?>


<!-- icon --> 

		<?php if(isset($module['iconSrc'])) {
			$iconClass = $module['iconClass'];
			$iconSrc = $module['iconSrc'];
			$iconAlt = $module['iconAlt']; ?>

		<picture class="icon <?=$iconClass?>">
			<img src="<?=$iconSrc?>" alt="<?=$iconAlt?>">
		</picture>
		<?php }?>