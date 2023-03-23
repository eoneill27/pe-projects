<?php

	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
			$moduleClass = '';
	}
?>

<card-grid class="<?=$moduleClass?>">

	<?php if(isset($module['topSub'])) { 
		$topSub = $module['topSub'];
		$topSubClass = $module['topSubClass'];
		?>
	<p class="<?=$topSubClass?>"><?=$topSub?></p>
	<?php } ?>

	<?php if(isset($module['heading2'])) { 
		$heading2 = $module['heading2'];
		$heading2Class = $module['heading2Class']; ?>
	<h2 class="<?=$heading2Class?>"><?=$heading2?></h2>
	<?php }?>

	<?php if(isset($module['bottomSub'])) { 
		$bottomSub = $module['bottomSub'];
		$bottomSubClass = $module['bottomSubClass']; ?>
	<p class="<?=$bottomSubClass?>"><?=$bottomSub?></p>
	<?php } ?>

	<?php if(isset($module['listClass'])) { ?>
	<div class="card-grid <?=$listClass?>">
	<?php } ?>
		<ul>
			<?php if(isset($module['listItems'])) {
				$listItems = $module['listItems'];
				foreach($listItems as $item) { 
					$liHeadingClass = $item['liHeadingClass'];
					$liHeading = $item['liHeading'];
					$liTextClass = $item['liTextClass'];
					$liText = $item['liText'];?>
			<li>
				<?php if(isset($item['liIconSrc'])) { 
					$liIconClass = $item['liIconClass'];
					$liIconSrc = $item['liIconSrc'];?>

				<picture class="<?=$liIconClass?>">
					<img src="<?=$liIconSrc?>" alt="">
				</picture>

				<?php } ?>

				<h3 class="<?=$liHeadingClass?>"><?=$liHeading?></h3>
				<p class="<?=$liTextClass?>"><?=$liText?></p>
			</li>

		<?php }} ?>
		</ul>
	</div>

	<?php if(isset($module['bottomLink'])) { 
		$bottomLink = $module['bottomLink'];
		$bottomLinkUrl = $module['bottomLinkUrl'];
		$bottomLinkClass = $module['bottomLinkClass']; ?>
	<a href="<?=$bottomLinkUrl?>" class="<?=$bottomLinkClass?>"><?=$bottomLink?></a>
	<?php } ?>

</card-grid>
