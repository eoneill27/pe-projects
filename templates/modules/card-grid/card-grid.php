
<?php 

	$header = (isset($header)) ? $header : "";
	$subHeader = (isset($subHeader)) ? $subHeader : "";

?>

<card-grid>
	
	<header class="module-header">
		<h1 class="heyyou-voice"><?=$header?></h1>
		<h2 class="info-voice"><?=$subHeader?></h2>
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
		
		</ul>
	</div>

</card-grid>