
<?php 

	$json = $json ?? file_get_contents('data/pages/projects.json');
	$array = json_decode($json, true);
	$array = $array;

?>


<card-grid>

	<div class="card-grid">

		<ul>

		<?php foreach($array['cards'] as $card) { ?>

			<li class="project form" style='list-style-type: none'>
				<a href="<?=$card['url']?>">
					<div class="card-tile">

						<h3 class="info-voice"><?=$card['title'];?></h3>
						<p class="reading-voice"><?=$card['description'];?></p>

					</div>
				</a>
			</li>

		<?php }; ?>
		
		</ul>
	</div>

</card-grid>

