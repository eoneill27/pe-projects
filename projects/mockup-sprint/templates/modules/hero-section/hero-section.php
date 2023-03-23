<!-- hero has h1, p, buttons, signup input & button -->

<?php
	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}
?>

<hero-section class="<?=$moduleClass?>">

	<?php if (isset($module['heading1'])) {
		$heading1 = $module['heading1']; 
		$heading1Class = $module['heading1Class']; ?>
		<h1 class="<?=$heading1Class?>"><?=$heading1?></h1>
	<?php } ?>

	<?php if (isset($module['paragraph'])) { 
		$paragraph = $module['paragraph'];
		$paragraphClass = $module['paragraphClass'];?>
		<p class="<?=$paragraphClass?>"><?=$paragraph?></p>
	<?php } ?>
	<div class="hero-links">
		<?php if (isset($module['link1Title'])) { 
			$link1Title = $module['link1Title'];
			$link1Class = $module['link1Class'];
			$link1Url = $module['link1Url']; 
			?> 
			<a href="<?=$link1Url?>" class="<?=$link1Class?>"><?=$link1Title?></a>
		<?php } ?>

		<?php if (isset($module['link2Title'])) { 
			$link2Title = $module['link2Title'];
			$link2Class = $module['link2Class'];
			$link2Url = $module['link2Url']; ?> 
			<a href="<?=$link2Url?>"class="<?=$link2Class?>"><?=$link2Title?></a>
		<?php } ?>
	</div>


	<?php if(isset($module['formID'])) { 
		$formID = $module['formID'];
		$formClass = $module['formClass'];
		$formMethod = $module['formMethod'];
		$formAction = $module['formAction'];
		$inputType = $module['inputType'];
		$inputPlaceholder = $module['inputPlaceholder'];
		$formButtonTitle = $module['formButtonTitle'];

		?>
		<form id="<?=$formID?>" class="<?=$formClass?> signup-component" action="<?=$formAction?>" method="<?=$formMethod?>">
			<input type="<?=$inputType?>" placeholder="<?=$inputPlaceholder?>">
			<button type="<?=$formButtonType?>"><?=$formButtonTitle?></button>
		</form>

	<?php } ?>

</hero-section>

