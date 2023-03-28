<?php

	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = "";
	}
?>

<details-list class="<?=$moduleClass?>">
	
	<div class="details-headings">
		<?php if(isset($module['heading'])) { 
			$heading = $module['heading'];
			$headingClass = $module['headingClass']; ?>
		
		<h2 class="<?=$headingClass?>"><?=$heading?></h2>

		<?php } ?>

		<?php if(isset($module['paraText'])) { 
			$paraText = $module['paraText'];
			$paraClass = $module['paraClass']; ?>

		<h3 class="<?=$paraClass?>"><?=$paraText?></h3>

		<?php } ?>
	</div>

	<div class="details">

	<?php if(isset($module['detailsItems'])) { 
		$detailsClass = $module['detailsClass'];
		$detailsItems = $module['detailsItems'];

		foreach($detailsItems as $item) {
			$summary = $item['summary'];
			$summaryClass = $item['summaryClass'];
			$text = $item['text'];
			$textClass = $item['textClass']; ?>

		<details class="<?=$detailsClass?>">
			<summary class="<?=$summaryClass?>"><?=$summary?></summary>
			<p class="<?=$textClass?>"><?=$text?></p>
		</details>

	<?php }} ?>

	</div>
</details-list>

