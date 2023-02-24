

<?php
	// $json = file_get_contents("data/resume.json");
	// $resumeData = json_decode($json, true);
	// $title = $resumeData["pageTitle"];
	// $sections = $resumeData["sections"];

	// don't need the above anymore because 
	// router in index.php is setting $pageData;
	// resume.json data is being pulled into this page

?>

<section class="resume">
	<inner-column>
		
		<?php include('templates/modules/page-header/page-header.php'); ?>

		<?php 

		foreach($pageData['sections'] as $section) { ?>

		<h2 class="info-voice"><?=$section['heading'];?></h2>
		<ul class="reading-voice">

		<?php 

		foreach($section['experiences'] as $experience) { ?>

			<li class="reading-voice">
				<?php if (isset($experience['title'])) { 
					echo "<h3 class='strong-voice'>" . $experience['title'] . "</h3>";
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


