


		
		<?php foreach($pageData['sections'] as $section) { 
			$module = $section['module']; 
			if(isset($section['class'])) {
				$class = $section['class'];
			}
		?>

			<section class="<?=$class?>">
				<inner-column>
					<?php include("templates/modules/$module/$module.php"); ?>
				</inner-column>
			</section>

	
		<?php } ?>
		
