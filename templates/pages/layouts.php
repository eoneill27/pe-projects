<section class="layout-garden">
	<inner-column>
	
		<?php include('templates/modules/page-header/page-header.php'); ?>
			
		<?php foreach ($pageData['sections'] as $section) { 
			$layout = $section['layout'];
			if(isset($section['content'])) {
				$content = $section['content'];
			}
			if(isset($section['class'])) {
				$class = $section['class']; 
			} 
		?>
			<div class="layout-div">

				<?php include("layouts/$layout/template.php"); ?>

			</div> 

		<?php } ?>

				

	</inner-column>
</section>