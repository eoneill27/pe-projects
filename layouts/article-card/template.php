
<?php
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $article['thumbnail'];
?>

<article class='article-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='info-voice title'><?=$heading?></h1>

		<p class='card-voice'><?=$description?></p>

		<a class='button' href='#'>Call to action</a>
	</text-content>
</article>
