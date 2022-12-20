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

	.letter {
		margin: 20px;
		padding: 20px;
		background-color: var(--main-color);
		box-shadow: -10px 10px var(--highlight);
	}

	h1 + .letter {
		margin-top: 40px;
	}

	.capitalize {
		text-transform: capitalize;
	}

</style>

<?php

	$sillyWordOne = "Oobleck";
	$lastName = "Nelson";
	$illness = "tonsilitis";
	$nounPlural = "sheep";
	$adjectiveOne = "repellent";
	$adjectiveTwo = "gusty";
	$sillyWordTwo = "iggypoo";
	$place = "Tokyo";
	$number = "four hundred";
	$adjectiveThree = "delightful";
	$nounPluralTwo = "anchovies";
	$number = "236";
?>

<inner-column>
	<h1>A funny Mad Lib to make you ______!</h1>

	<div class="letter">
		<p>Dear School Nurse:</p>
		<p><span class="capitalize"><?=$sillyWordOne?> <?=$lastName?></span> will not be attending school today. He/she has come down with a case of <span><?=$illness?></span> and has horrible <span><?=$nounPlural?></span> and a/an <span><?=$adjectiveOne?></span> fever. We have made an appointment with the <span><?=$adjectiveTwo?></span> Dr. <span class="capitalize"><?=$sillyWordTwo?></span>, who studied for many years in <span class="capitalize"><?=$place?></span> and has <span><?=$number?></span> degrees in pediatrics. He will send you all the information you need. Thank you!</p>
		<p>Sincerely,</p>
		<p>Mrs. <span class="capitalize"><?=$adjectiveThree?></span></p>

		<p>P.S. Rest assured, we haven't forgotten that we need to pay you back for all of the <span><?=$nounPluralTwo?></span> that <span class="capitalize"><?=$sillyWordOne?></span> has taken from the school supply room. If I am not mistaken, the total comes to 4 dollars multiplied by <span><?=$number?></span>, or <span><?php echo 4 * $number; ?></span>.</p>


	</div>
<inner-column>

