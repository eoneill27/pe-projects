<?php
	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}
	
?>

<mast-head class="<?=$moduleClass?>">
	<?php if(isset($module['logoSrc'])) { 
		$logoSrc = $module['logoSrc'];
		$logoClass = $module['logoClass'];
		$logoAlt = $module['logoAlt']; ?>

	<div class="logo-area">
		<a href="index.php">
			<picture class="<?=$logoClass?>">
				<img src="<?=$logoSrc?>" alt="<?=$logoAlt?>">
			</picture>
		</a>
	</div>
	<?php }?>

	<?php if(isset($module['navClass'])) {
		$navClass = $module['navClass']; ?>
	<nav class="<?=$navClass?>">
	<?php } ?>

	<?php if(isset($module['navLinks'])) {
		$navLinks = $module['navLinks'];
		foreach($navLinks as $navLink) { 
			$navUrl = $navLink['navUrl'];
			$navLinkClass = $navLink['navLinkClass'];
			$navTitle = $navLink['navTitle']; ?>

		<a href="<?=$navUrl?>" class="<?=$navLinkClass?>"><?=$navTitle?></a>

	<?php }} ?>
	
	</nav>

	<?php if(isset($module['divRightClass'])) {
		$divRightClass = $module['divRightClass']; ?>

	<div class="login-area <?=$divRightClass?>">
		<?php if(isset($module['iconSrc'])) { 
			$iconClass = $module['iconClass'];
			$iconSrc = $module['iconSrc'];?> 
		<a href="#">
			<picture class="<?=$iconClass?>">
				<img src="<?=$iconSrc?>" alt="">
			</picture>
		</a>
		<?php } ?>

		<?php if(isset($module['button1Title'])) { 
			$button1Title = $module['button1Title'];
			$button1Url = $module['button1Url'];
			$button1Class = $module['button1Class'];	?>
		<a class="<?=$button1Class?>" href="<?=$button1Url?>"><?=$button1Title?></a>
		<?php } ?>

		<?php if(isset($module['button2Title'])) { 
			$button2Title = $module['button2Title'];
			$button2Url = $module['button2Url'];
			$button2Class = $module['button2Class'];?>
		<a class="<?=$button2Class?>" href="<?=$button2Url?>"><?=$button2Title?></a>
		<?php } ?>
	<?php } ?>

	</div>
</mast-head>


