
<card-grid>
	
	<header class="module-header">
		<h1 class="heyyou-voice"><?=$header?></h1>
	</header>

	<div class="card-grid">

		<ul>

		<?php foreach($array as $thing) { ?>

		<li class="form" style='list-style-type: none'>
			<a href="<?=$thing['url'];?>">
				<div class="card-tile">

					<h3 class="info-voice"><?=$thing['title'];?></h3>
					<p class="reading-voice"><?=$thing['description'];?></p>

				</div>
			</a>
		</li>

		<?php }; ?>

	</div>
	
</card-grid>