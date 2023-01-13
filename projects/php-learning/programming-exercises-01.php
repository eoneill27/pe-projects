<?php

function tipCalculator($billAmount, $tipRate) {

	$typeCheck = gettype($billAmount);

	if ($typeCheck == 'boolean') {
		return "Please enter a valid number for the bill amount";
	} elseif ($typeCheck == 'string') {
		return "Please enter a valid number for the bill amount";
	} elseif ($typeCheck == 'array') {
		return "Please enter a valid number for the bill amount";
	} elseif ($typeCheck == 'object') {
		return "Please enter a valid number for the bill amount";
	} elseif ($typeCheck == 'resource') {
		return "Please enter a valid number for the bill amount";
	} elseif ($typeCheck == 'NULL') {
		return "Please enter a valid number for the bill amount";
	};

	$tipAmount = $billAmount * ($tipRate/100);

	$tipAmount = number_format($tipAmount, 2, '.', ',');

	$billTotal = $billAmount + $tipAmount;


	return "Your total bill is $" . $billTotal;


};


echo tipCalculator(45.5, 15);

?>

<br/>
<br/>

<?php

$billAmount = 45.5;
$tipRate = 15;

$billTypeCheck = gettype($billAmount);
$tipTypeCheck = gettype($tipRate);

if ($billTypeCheck != "integer") {
	echo "Please enter a valid number for the bill amount.<br/>";
} else {
	echo "What is the bill total? " . $billAmount . "<br/>";
};

if ($tipTypeCheck != "integer") {
	echo "Please enter a valid number for the tip rate.";
} else {
	echo "What percent tip do you want to leave? " . $tipRate . 
"<br/>";
}

$tipAmount = $billAmount * ($tipRate/100);
$tipAmount = number_format($tipAmount, 2, '.', ',');
$billTotal = $billAmount + $tipAmount;


echo "Your tip is $" . $tipAmount . "<br/>";

echo "Your total bill is $" . $billTotal;

echo "Your total bill is \${$billTotal}";

?>