
<gallery-diptych>
	
	<div class="gd-text">
		<div class="gd-header">
			<h2 class="attention-voice">Heading level 2</h2>
			<p class="reading-voice">This is some body text. This is some body text. This is some body text.</p>
		</div>
		
		<ul class="text-grid">
			
			<?php 

				$json = file_get_contents('data/gd-text.json');
				$textArray = json_decode($json, true);

				foreach ($textArray as $text) { ?>

					<li>
						<h3 class="info-voice">Heading level 3</h3>
						<p class="reading-voice">This is some body text. This is some body text. This is some body text.</p>
					</li>

				<?php } ?>

		</ul>
	</div>

	<ul class="image-grid">
		
		<?php 

			$json = file_get_contents('data/gd-photos.json');
			$photoArray = json_decode($json, true);

			foreach ($photoArray as $photo) { ?>
				<li>
					<picture class="gd-pic">
						<img src="<?=$photo['imageSource']?>" alt="<?=$photo['alt']?>">
					</picture>
				</li>

			<?php } ?>

	</ul>

</gallery-diptych>