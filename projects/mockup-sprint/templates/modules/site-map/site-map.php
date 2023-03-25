<?php
	
?>
<site-map class="<?=$module['moduleClass']?>">
	<inner-column>

		<div class="footer-section1">
			<nav class="product-nav">
				<h5 class="loud-voice">Product</h5>
				<ul class="reading-voice">
					<li>Diam orci</li>
					<li>Mi feugiat</li>
					<li>Netus fermentum</li>
					<li>Suspendisse viverra</li>
					<li>Id dolor</li>
					<li>Erat mattis</li>
				</ul>
			</nav>
			<nav class="information-nav">
				<h5 class="loud-voice">Information</h5>
				<ul class="reading-voice">
					<li>Nibh</li>
					<li>Egestas</li>
					<li>Dictum</li>
				</ul>
			</nav>
			<nav class="company-nav">
				<h5 class="loud-voice">Company</h5>
				<ul class="reading-voice">
					<li>Id maecenas</li>
					<li>Id orci</li>
					<li>Magna ultricies</li>
					<li>Quis risus</li>
				</ul>
			</nav>

			<div class="subscribe-box">
				<h5 class="loud-voice">Subscribe</h5>

				<form id="short-signup" class="" action="" method="post">
					<input type="email" placeholder="Email address">
					<button type="submit"></button>
				</form>

				<p>Gravida sed justo, justo, id est et. Amet tristique convallis sed porttitor nullam eu ut. Duis et odio aliquam bibendum. Metus et lectus id viverra fringilla magna morbi. </p>
			</div>
		</div>

		<div class="footer-section2">
			<a href="index.php">
				<picture class="logo">
					<img src="<?=$module['logoSrc']?>" alt="">
				</picture>
			</a>

			<nav class="legal-nav">
				<ul class="quiet-voice">
					<li>Terms</li>
					<li>Privacy</li>
					<li>Cookies</li>
				</ul>
			</nav>

			<div class="socials">
				<a href="index.php">
					<picture class="social-logo">
						<img src="<?=$module['socialIcon1']?>" alt="">
					</picture>
				</a>
				<a href="index.php">
					<picture class="social-logo">
						<img src="<?=$module['socialIcon2']?>" alt="">
					</picture>
				</a>
				<a href="index.php">
					<picture class="social-logo">
						<img src="<?=$module['socialIcon3']?>" alt="">
					</picture>
				</a>
			</div>
		</div>	
	</inner-column>
</site-map>