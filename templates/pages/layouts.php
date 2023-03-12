	<div class="page-heading">
		<?php include('templates/modules/page-header/page-header.php'); ?>
	</div>

	<div class="layouts-content">		
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
	</div>