<!DOCTYPE html>
<html>
	<head>
		<title>Control Flow</title>

		<style>
			body {
				background-color: #FFFBEE;
				padding: 20px;
				--main-color: #ebdf66;
				--highlight: #c3f0fe;
				--heading-color: #EE270E;
				--p-color: black;
				--span-color: salmon;
			}

			@media (prefers-color-scheme: dark) {
				body {  
					background-color: #31487c;
					--main-color: #6F087E;
					--highlight: #de01ff;
					--heading-color: lightpink;
					--p-color: #FFFBEE;
					--span-color: gold;
				}
			}

			inner-column {
				display: block;
				max-width: 1000px;
				margin-left: auto;
				margin-right: auto;
			}

			h1 {
				background-color: var(--highlight);
				font-size: 32px;
				font-family: Avenir, sans-serif;
				color: var(--heading-color);
				text-align: center;
				margin: 20px;
				padding: 20px;
				box-shadow: -10px 10px var(--main-color);
			}

			p {
				color: var(--p-color);
				font-family: Georgia, serif;
				font-size: 22px;
				line-height: 1.4;
			}

			span {
				font-family: Rockwell, Courier, serif;
				font-size: 26px;
				font-weight: 600;
				color: var(--span-color);
			}

			.main {
				margin: 20px;
				padding: 20px;
				background-color: var(--main-color);
				box-shadow: -10px 10px var(--highlight);
			}

			h1 + .main {
				margin-top: 40px;
			}

		</style>
	</head>
	<body>
		
		<h1>Control Flow</h1>

		<!-- if/else statements -->
		<div class="main">
			<p class="reading-voice">
			If it is between 5am and 11:59am, say "Good morning!" If it is after noon but before 5, say "Good afternoon!" If is 5pm or later and before 8pm, say "Good evening!" Otherwise, say "Good night!" Enter time on the 24-hour clock/military time.
			</p>

			<span class="echo-voice">
				<?php 

					date_default_timezone_set ('America/Vancouver');

					$time = date("H:i:s");

					$am = ("05:00:00" <= $time) && ($time <= "11:59:00");
					$pm = ("12:00:00" <= $time) && ($time <= "16:59:00");
					$eve = ("17:00:00" <= $time) && ($time <="19:59:00");

					if ($am) {
						echo "Good morning!";
					} elseif ($pm) {
						echo "Good afternoon!";
					} elseif ($eve) {
						echo "Good evening!";
					} else {
						echo "Good night!";
					}
				?>
			</span>

			<p class="reading-voice">
			If the service was great, calculate a 20% tip on the subtotal. If the service was good, calculate an 18% tip on the subtotal. Otherwise, calculate a 15% tip on the subtotal.
			</p>

			<span class="echo-voice">

				<?php

					$serviceQuality = "good";
					$subtotal = "45.55";

					if ($serviceQuality == "great") {
						echo "$" . $subtotal * .2; 
					} elseif ($serviceQuality == "good") {
						echo "$" . $subtotal * .18;
					} else {
						echo "$" . $subtotal * .15;
					}
				?>

			</span>

			<p class="reading-voice">
			Depending on the temperature, tell me what I should bring when I go outside.
			</p>

			<span class="echo-voice">
				<?php

					$temperature = 39;
					$freezing = $temperature < 40;
					$cold = (41 < $temperature) && ($temperature < 65);
					$warm = (66 < $temperature) && ($temperature < 80);
					$hot = $temperature > 80;

					if ($freezing) {
						echo "Bring your gloves!";
					} 

					if ($cold) {
						echo "Don't forget a coat!";
					}

					if ($warm) {
						echo "It's warm outside.";
					}

					if ($hot) {
						echo "It's hot! You should bring a water bottle!";
					}

				?>

			</span>

			<p class="reading-voice">A quick test to determine if today is Christmas.</p>

			<span class="echo-voice">

				<?php
					$dec25 = false;

					if ($dec25) {
						echo "Today is Christmas!";
					} else {
						echo "It's not Christmas yet.";
					}
				?>

				
			</span>

			<p class="reading-voice">Another version of the Christmas test. This one does not require user input.</p>

			<span class="echo-voice">

				<?php

					$date = date("m.d");
					$christmas = "12.25";
				

					if ($date == $christmas) {
						echo "Today is Christmas!";
					} else {
						echo "It's not Christmas yet.";
					}
				?>
				
			</span>

		</div>

	</body>
</html>