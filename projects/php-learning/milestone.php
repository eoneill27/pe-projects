<?php

	$guests = 4;
	$hosts = 1;
	$totalPeople = $guests + $hosts;
	$berriesPerPerson = 15;
	$berriesPerBox = 26;
	$totalBerries = $totalPeople * $berriesPerPerson;
	$totalBoxes = $totalBerries / $berriesPerBox;
	$totalBoxesRounded = ceil($totalBoxes);
	$pricePerBox = 15;
	$costOfBoxes = $pricePerBox * $totalBoxesRounded;

	$message = "We're having a party! $guests guests are coming. It will be so great! I want to serve berries and I think $berriesPerPerson berries is just the right number of berries per guest. So I guess that means we need $totalBerries berries. Can you go to the store?";

	echo $message;
 
 	$message = "Boxes have $berriesPerBox berries in them. If we have $totalPeople total people and we need $berriesPerPerson berries per person, how many boxes do we need? I think it's $totalBoxesRounded. That will cost {$costOfBoxes} dollars";

 	echo $message;
