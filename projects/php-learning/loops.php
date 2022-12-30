<?php

echo "hello";

$arrayOne = [2, "hello", "cat", "Vancouver", 45, true, false];

$harry = [
	"id" => "101",
	"name" => "Harry",
	"favoriteFood" => "pizza",
	"age" => 12,
	"adopted" => false,
];

echo "<br/>";

echo $arrayOne[0];

echo "<br/>";

echo "I have " . $arrayOne[0] . " " . $arrayOne[2] . "s.";



echo "<p id='101'>" . $harry["name"] . "'s favorite food is " . $harry["favoriteFood"] . ". " . $harry["name"] . " is " . $harry["age"] . " years old." . "</p>";



$story = $harry["name"] . "'s favorite food is " . $harry["favoriteFood"] . ". " . $harry["name"] . " is " . $harry["age"] . " years old.";

$template = "<p id=" . $harry["id"] . ">" . $story . "</p>";

echo $template;

echo "<br/>";
echo "<br/>";

$fruitsArray = ["apple", "banana", "papaya", "mango", "blueberry"];

echo "<ol>";

foreach ($fruitsArray as $fruit) {
	echo "<li>" . $fruit . "</li>";
}

echo "</ol>";

$baseballTeams = ["Seattle Mariners", "Oakland Athletics", "New York Yankees", "Detroit Tigers", "Chicago White Sox", "Washington Nationals", "Milwaukee Brewers", "Baltimore Orioles"];

echo "<style> ul li {color: red}</style>";
echo "<ul>";

foreach ($baseballTeams as $team) {
	echo "<li>" . $team . "</li>";
};

echo "</ul>";




