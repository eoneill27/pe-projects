<?php 
	if(isset($module['moduleClass'])) {
		$moduleClass = $module['moduleClass'];
	} else {
		$moduleClass = '';
	}
?>

<client-slider class="<?=$moduleClass?>">
	
	<?php if(isset($module['heading'])) {
		$heading = $module['heading'];
		$headingClass = $module['headingClass']; ?>
	<h2 class="<?=$headingClass?>"><?=$heading?></h2>
	<?php } ?>

	<?php if(isset($module['text'])) {
		$text = $module['text'];
		$textClass = $module['textClass']; ?>
	<p class="<?=$textClass?>"><?=$text?></p>
	<?php } ?>

	<div class="reviews">

		<?php if(isset($module['reviews'])) {
			$reviews = $module['reviews'];

			foreach($reviews as $review) { ?>

 			<div class="review-card">

			<?php if(isset($review['imgSrc'])) {
				$pictureClass = $review['pictureClass'];
				$imgSrc = $review['imgSrc'];
				$imgAlt = $review['imgAlt']; ?>

				<picture class="client-picture <?=$pictureClass?>">
					<img src="<?=$imgSrc?>" alt="<?=$imgAlt?>">
				</picture>
			<?php }?>

			<?php if(isset($review['blurb'])) {
				$blurb = $review['blurb'];
				$blurbClass = $review['blurbClass']; ?>
				<div class="review-text">

					<p class="blurb <?=$blurbClass?>"><?=$blurb?></p>
			<?php } ?>

					<div class="client-info">

			<?php if(isset($review['iconSrc'])) {
				$iconClass = $review['iconClass'];
				$iconSrc = $review['iconSrc'];
				$iconAlt = $review['iconAlt']; ?>

						<picture class="icon <?=$iconClass?>">
							<img src="<?=$iconSrc?>" alt="<?=$iconAlt?>">
						</picture>
				<?php }?>

					<div class="name-role">
				<?php if(isset($review['clientName'])) {
					$clientName = $review['clientName'];
					$clientNameClass = $review['clientNameClass']; ?>
						<p class="client-name <?=$clientNameClass?>"><?=$clientName?></p>
				<?php } ?>

				<?php if(isset($review['clientRole'])) {
					$clientRole = $review['clientRole'];
					$clientRoleClass = $review['clientRoleClass']; ?>
						<p class="client-role <?=$clientRoleClass?>"><?=$clientRole?></p>
					</div>
				<?php } ?>
					</div>
				</div>
			</div>
		<?php } }?>
	</div>

</client-slider>


