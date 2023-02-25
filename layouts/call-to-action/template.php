
	<?php
		if(isset($section['id'])) {
			$id = $section['id']; 
		} else {
			$id = "";
		}

		if(isset($section['imgClass'])) {
			$imgClass = $section['imgClass'];
		} else {
			$imgClass = "";
		}

		if(isset($section['img'])) {
			$img = $section['img'];
		} else {
			$img = "https://peprojects.dev/images/landscape.jpg";
		}

		if(isset($section['alt'])) {
			$alt = $section['alt'];
		} else {
			$alt = "";
		}

		if(isset($section['content'])) {
			$content = $section['content'];
		} else {
			$content = "Default content";
		}

		if(isset($section['link'])) {
			$link = $section['link'];
		} else {
			$link = "#";
		}

		if(isset($section['buttonText'])) {
			$buttonText = $section['buttonText'];
		} else {
			$buttonText = "Click here!";
		}
	?>

<call-to-action id="<?=$id?>">
	<picture class="cta-picture <?=$imgClass?>">
		<img src="<?=$img?>" alt="<?=$alt?>">
	</picture>

	<div class="not-picture">
		<text-content>
			<?=$content?>
		</text-content>

		<div class="button">
			<a class="button-voice" href='<?=$link?>'><?=$buttonText?></a>
		</div>
	</div>
</call-to-action>

<?php ?>


