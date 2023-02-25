<section class="style-guide">
	<inner-column>
	
			
		<?php foreach ($pageData['sections'] as $section) { 
			$module = $section['module'];
			if(isset($section['content'])) {
				$content = $section['content'];
			}
			if(isset($section['class'])) {
				$class = $section['class']; 
			} 
		?>
			<div class="style-div">

				<?php include("templates/modules/$module/$module.php"); ?>

			</div> 

		<?php } ?>

				

	</inner-column>
</section>