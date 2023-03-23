<?php 
	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}
?>

<featured-stuff class="<?=$moduleClass?>">
	
	<div class="feature-side1">

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

		<?php if(isset($module['imgSrc'])) {
			$pictureClass = $module['pictureClass'];
			$imgSrc = $module['imgSrc'];
			$imgAlt = $module['imgAlt']; ?>

		<picture class="feature-img <?=$pictureClass?>">
			<img src="<?=$imgSrc?>" alt="<?=$imgAlt?>">
		</picture>
		<?php }?>
	</div>

	<div class="feature-side2">
		<?php if(isset($module['listItems'])) {
			$listClass = $module['listClass'];
			$listItems = $module['listItems']; ?>

		<ul class="<?=$listClass?>">

		<?php foreach($listItems as $item) { 
			$listItemClass = $item['listItemClass'];
			$heading = $item['heading'];
			$headingClass = $item['headingClass'];
			$text = $item['text']; 
			$textClass = $item['textClass'];?>
					
				<li class="<?=$listItemClass?>">
					<h4 class="<?=$headingClass?>"><?=$heading?></h4>
					<p class="<?=$textClass?>"><?=$text?></p>
					</li>
		<?php } ?>

		</ul>
		
		<?php } ?>

	</div>
</featured-stuff>


