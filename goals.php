<?php include('header.php'); ?>	

<inner-column>
	<section class="goals">
		<h1 class="attention-voice">Goals</h1>

		<?php include('data/goals.php');

			foreach($goals as $goal) {
				echo "<h2 class='info-voice'>" . $goal["heading"] . "</h2>
					<ul class='reading-voice'>";

					foreach($goal["items"] as $item) {
						echo "<li class='reading-voice'>" . $item . "</li>";
					};
				echo "</ul>";
			};

		?>
<!-- 		<h2 class="info-voice">End of the Course</h2>
		<ul class="reading-voice">
			<li>confidence in my skills as a designer and a developer</li>
			<li>a beautiful personal website that showcases who I am and what I can do - something that will market me well to potential clients</li>
			<li>some experience with real-world projects</li>
			<li>one job (at least) to look forward to working on, as the start of the transition out of my current job</li>
		</ul>
		
		<h2 class="info-voice">5-year vision</h2>
		<ul class="reading-voice">
			<li>self-employed</li>
			<li>owner & operator of web design business</li>
			<li>making $125,000+ annually</li>
			<li>flexible schedule - able to take long vacations, or work 4-day weeks
work when and where I want to</li>
			<li>engaging, interesting work that I enjoy - something that I don't mind devoting long days to, especially when long days mean shorter work weeks</li>
			<li>owner of 2-bedroom condo with a view in my neighbourhood</li>
			<li>owner of a wirehaired dachshund named Little Joey Cora</li>
			<li>flourishing work-life balance - lots of walks, lots of time with my friends and their kids, healthy meals at home</li>
		</ul> -->
		
	</section>
</inner-column>

<?php include('footer.php'); ?>