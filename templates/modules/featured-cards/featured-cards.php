<?php

	$header = (isset($header)) ? $header : "";
	$totalShown = 2;
	// $array = $array;
	$array = $array['cards'];
	$featuredArray = array_slice($array, 0, $totalShown);
?>

<featured-cards>
	<h2 class="heyyou-voice"><?=$header?></h2>

	<ul>

		<?php 
			foreach ($featuredArray as $card) { ?>

				<li>
					<a href="<?=$card['url'];?>">
						<div class="card-tile">
							<h3 class="info-voice"><?=$card['title'];?></h3>
							<p class="reading-voice"><?=$card['description'];?></p>
						</div>
					</a>
				</li>
			
		<?php }; ?>
		
	</ul>

	<div class="button">
		<a class="button-voice" href="projects.php">Find out more</a>
	</div>
</featured-cards>

