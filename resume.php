<?php include('header.php'); ?>	

<inner-column>
	<section class="resume">
		<h1 class="attention-voice">Resume</h1>

		<h2 class="info-voice">Education</h2>
		<ul class="reading-voice">

		<?php include('data/resume.php');

			foreach($education["listItems"] as $educationItem) {
			
		?>

			<li class="reading-voice"><?=$educationItem?></li>
		
		<?php }; ?>

		</ul>

		<h2 class="info-voice">Work Experience</h2>
		<ul class="reading-voice">

		<?php 

			foreach($workExperience as $workItem) {
				$jobTitle = $workItem["jobTitle"];
				$time = $workItem["time"];
				$organization = $workItem["organization"];
				$location = $workItem["location"];
			?>

			<li class="reading-voice"><h3><?=$jobTitle?></h3>
				<?=$time?><br/>
				<?=$organization?><br/>
				<?=$location?><br/>
			</li>

		<?php } ?>

		</ul>

		<h2 class="info-voice">Personal Activities and Interests</h2>
		<ul class="reading-voice">

		<?php 
			foreach($personal["listItems"] as $personalItem) {
			
		?>

			<li class="reading-voice"><?=$personalItem?></li>
		
		<?php }; ?>

		</ul>


			<li>Member of a ukulele trio (but don't ask - we only perform for our book club)</li>
			<li>Templeton Swim Boot Camp team member since 2015</li>
			<li>UBC sprint triathlon finisher seven years running</li>
		</ul> -->
		
	</section>
</inner-column>

<?php include('footer.php'); ?>