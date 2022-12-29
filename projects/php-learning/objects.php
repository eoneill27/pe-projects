<?php 

	$mule = [
		"animalType" => "mammal", 
		"genus" => "Equus",
		"furLength" => "short",
		"tailLength" => "long",
		"furColor" => "gray",
		"tailColor" => "black",
		"heightInches" => 60,
		"weightPounds" => 900,
		"weightBearingCapacityPounds" => 190,
		"hooved" => true,
		"domesticated" => true,
		"stubborn" => true,
	];

	$banjo = [
		"type" => "5-string",
		"numberOfPegs" => 5,
		"resonatorBack" => false,
		"builtInCapo" => true,
		"headColor"=> "white",
		"key" => "G",
		"frets" => true,
		"numberOfFrets" => 22,
		"neckLengthInches" => 26.25,
		"headDiameterInches" => 11,
	];

	$book0001 = [
		"id" => 101,
		"title" => "The Thousand Autumns of Jacob de Zoet",
		"author" => "David Mitchell",
		"genre" => ["drama", "historical fiction"],
		"language" => "English",
		"hardcover" => true,
		"pageCount" => 480,
		"publicationYear" => 2010,
		"publisher" => "Sceptre",		
	];

	$book0002 = [
		"id" => 102,
		"title" => "The Wicked Enchantment",
		"author" => "Margot Benary-Isbert",
		"genre" => "fiction, children's, fantasy",
		"language" => "English",
		"hardcover" => true,
		"pageCount" => 181,
		"publicationYear" => 1955,
		"publisher" => "Harcourt, Brace & Company",
	];

	$book0003 = [
		"id" => 103,
		"title" => "The Design of Everday Things",
		"author" => "Don Norman",
		"genre" => "non-fiction, design",
		"language" => "English",
		"hardcover" => false,
		"pageCount" => 347,
		"publicationYear" => 2013,
		"publisher" => "Basic Books",
	];

	$title = $book0001["title"];
	$author = $book0001["author"];
	$id = $book0001["id"];

	$titleAuthor = $title . " " . "/" . " " . $author;

	// if ("id" == 101 or 102) {
	// 	echo $titleAuthor;
	// }

	$titles = array($book0001["title"], $book0002["title"], $book0003["title"]);

	$authors = array($book0001["author"], $book0002["author"], $book0003["author"]);

	echo "There are " . count($titles) . " books in the array.";

	echo "<br/>";
	
	echo $book0001["author"] . " " . $book0002["author"] . " " . $book0003["author"];

	echo "<br/>";
?>

<br/>
<style>
	td {
		padding: 20px;
		border: 2px solid black;
	}
</style>
<table>
	<tr>
		<th>Title</th>
		<th>Author</th>
	</tr>
	<tr>
		<td><?=$titles [0];?></td>
		<td><?=$authors [0];?></td>
	</tr>
	<tr>
		<td><?=$titles [1];?></td>
		<td><?=$authors [1];?></td>
	</tr>
	<tr>
		<td><?=$titles [2];?></td>
		<td><?=$authors [2];?></td>
	</tr>
</table>

<!-- <p>Wondering - how do I combine these things? If I have two variables called $book, the second one takes precedence. I'm sure I'm getting ahead of myself, but can I start to make a database with PHP? Is it possible to have multiple $books, or do I need to differentiate the variables in some way? Can I echo particular values from multiple variables?</p> -->