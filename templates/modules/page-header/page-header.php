<?php
	$title = $title ?? $pageData['title'] ?? "This is a default page-header title";
	$subtitle = $pageData['subtitle'] ?? "This is a default page-header subtitle";
?>

<page-header class="page-heading">
	
	<h1 class="heyyou-voice"><?=$title;?></h1>

	<?php if(isset($pageData['subtitle'])) { ?>

		<h2 class="attention-voice"><?=$subtitle;?></h2>

	<?php } ?>

</page-header>