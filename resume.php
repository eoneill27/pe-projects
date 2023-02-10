<?php include('header.php'); ?>	

<?php
	$json = file_get_contents("data/resume.json");
	$resumeData = json_decode($json, true);
	$title = $resumeData["pageTitle"];
	$sections = $resumeData["sections"];

?>

<section class="resume">
	<inner-column>
		
		<h1 class="heyyou-voice"><?=$title?></h1>

		<?php 

		foreach($sections as $section) { ?>

		<h2 class="info-voice"><?=$section['heading'];?></h2>
		<ul class="reading-voice">

		<?php 

		foreach($section['experiences'] as $experience) { ?>

			<li class="reading-voice">
				<?php if (isset($experience['title'])) { 
					echo "<h3>" . $experience['title'] . "</h3>";
				} ?>
				<?php if (isset($experience['time'])) { 
					echo $experience['time'] . "<br/>";
				} ?>
				<?php if (isset($experience['organization'])) { 
					echo $experience['organization'] . "<br/>";
				} ?>
				<?php if (isset($experience['location'])) { 
					echo $experience['location'] . "<br/>";
				} ?>
				<?php if (isset($experience['description'])) { 
					echo $experience['description'] . "<br/>";
				} ?>
			</li>

		<?php } ?>
	

		</ul>

	<?php } ?>
	</inner-column>
</section>


<?php include('footer.php'); ?>