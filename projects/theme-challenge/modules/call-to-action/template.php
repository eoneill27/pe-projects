

	<?php
		include ("data/cta.php");
		$totalShown = 1;
		$total = $totalShown++;
		$offset = 0;
		$off = $offset++;

		// foreach(array_slice($ctas, $off, $total) as $)
		
		// $i++;

		// $ctas = array_slice($ctas, $i, $totalShown);

		foreach($ctas as $cta) {
			
			// $offset++;
			// $totalShown++;
			$id = $cta["id"];
			$heading = $cta["heading"];
			$p = $cta["paragraph"];
			$a = $cta["link"];
			$button = $cta["button"];
			$img = $cta["image"];
			$imgClass = $cta["imgClass"];
			$alt = $cta["imgAlt"];
	?>
<call-to-action id="<?=$id?>">
	<picture class="<?=$imgClass?>">
		<img src="<?=$img?>" alt="<?=$alt?>">
	</picture>

	<div class="not-picture">
		<text-content>
			<h2 class='heading attention-voice'><?=$heading?></h2>

			<p class='story'><?=$p?></p>
		</text-content>

		<a class='button' href='<?=$a?>'><?=$button?></a>
	</div>
</call-to-action>

<?php ;} ;?>


