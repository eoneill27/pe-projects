<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>PBS Crash Course - Computer Science</title>
		<meta name="description" content="[[insert description]]">

		<meta property="og: image" content="[[meta image source]]">
		<link rel="icon" href="[[insert favicon source]]">

		<link rel="stylesheet" href="css/style.css">

		<?php if(isset($_GET['mode'])) {
		echo "<style>
					html, body *, .site-header, .site-footer .top-footer, .site-footer .bottom-footer, .heyyou-voice, .reading-voice, .vid-title-voice, .vid-meta-voice {
						background-color: black;
						color: white;
					}
					a:hover {
						color: salmon;
					}

				</style>";

	} else echo "<body>";
	?>
	</head>



		<header class="site-header">
			<a href="https://www.pbs.org" class="logo">PBS</a>
			<!-- <span>&#124;</span> -->

			<a href="http://peprojects.dev/alpha-6/emily/projects/crash-course/?mode=dark" class="dark-mode">dark</a>/<a href="http://peprojects.dev/alpha-6/emily/projects/crash-course">light</a>

			
			
		</header>

		<main class="page-content">
			<inner-column>

				<a class="crash-link" href="https://www.pbs.org/show/crash-course-computer-science/">Crash Course Computer Science</a> 

				<h1 class="heyyou-voice">Season 1</h1>

				<p class="reading-voice">Starting February 22nd, Carrie Anne Philbin will be hosting Crash Course Computer Science! In this series, we're going to trace the origins of our modern computers, take a closer look at the ideas that gave us our current hardware and software, discuss how and why our smart devices just keep getting smarter, and even look towards the future!</p>
				
				
				<p class="sort-text reading-voice">View <a class="vid-title-voice sort-link asc" href="https://peprojects.dev/alpha-6/emily/projects/crash-course/"> oldest videos first</a>&nbsp<span>&#124;</span>&nbsp<a class=" vid-title-voice sort-link desc" href="https://peprojects.dev/alpha-6/emily/projects/crash-course/?order=descending">newest videos first</a></p>

				
				<?php include("videoCardMaker.php"); ?>

			</inner-column>
		</main>

		<footer class="site-footer">
			<section class="top-footer">
				<inner-column>
					<div class="footer1">
						<h1>LOGO</h1>
					</div>
					<div class="footer2">
						<div class="footer2-1">
							<h2>Footer Heading</h2>
								<ul class="footer-list">
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
								</ul>
						</div>
						<div class="footer2-2">
							<ul>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
							</ul>
						</div>
					</div>
					<div class="footer3">
						<div class="footer3-1">
							<h2>Footer Heading</h2>
								<ul class="footer-list">
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
								</ul>
						</div>
						<div class="footer3-2">
							<ul>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
							</ul>
						</div>
					</div>
					<div class="footer4">
						<div class="footer4-1">
							<h2>Footer Heading</h2>
								<ul class="footer-list">
									<li class="footer-list-item">List item</li>
									<li class="footer-list-item">List item</li>
								</ul>
						</div>
						<div class="footer4-2">
							<ul>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
								<li class="footer-list-item">List item</li>
							</ul>
						</div>
					</div>
					<div class="footer5">
						<h2>SVG goes here</h2>
					</div>

				</inner-column>
			</section>

			<section class="bottom-footer">
				<inner-column>
					<div class="copyright">
						<p>Copyright 2023 Public Broadcasting Service (PBS), all rights reserved. PBS is a 501(c)(3) not-for-profit organization.</p>
					</div>
					<div class="terms">
						<a href="">Privacy Policy</a>
						<a href="">Terms of Use</a>
						<a href="">Marketing Preferences</a>
					</div>
				</inner-column>
			</section>
		</footer>

	</body>

</html>