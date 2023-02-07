<?php

//gets data from JSON file and turns it into PHP data
//argument is .json file - this is assigned to $jsonFile variable
//$jsonFile variable is passed into json_decode function and 
//assigned to $phpStyleData variable
//$phpStyleData is returned
function getData($myJsonFile) {

	$jsonFile = file_get_contents($myJsonFile);

	$phpStyleData = json_decode($jsonFile, true);

	return $phpStyleData;
}

//converts PHP data to JSON
//saves that JSON data into JSON file
//arguments are .json file and PHP data
//PHP data is encoded into JSON and assigned to $json variable
//$json variable is passed into file_put_contents function
//along with .json file name - so $json variable contents are put into .json file
function saveData($myJsonFile, $phpData) {

	$json = json_encode($phpData);

	file_put_contents($myJsonFile, $json, FILE_APPEND); 
}

//renders the data in specified way

function renderMeetingData () {
	$jsonFile = file_get_contents("data/meetings.json");
	$meetingArray = json_decode($jsonFile, true);
	return $meetingArray;
}

//in practice - 

// $items = getData('an-example.json');
// (php data array = .json file converted to PHP with getData function)

// user input from form - 
// $newBook = [
//		"title" => "The Secret History",
// ];

// array_push($items, $newBook);

// saveData('an-example.json', $items);

// renderMeetingData produces PHP array from JSON data

?>