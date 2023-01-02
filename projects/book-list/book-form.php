<?php

	function bookForm($id, $title, $author, $genre, $yearRead, $recommended) {
		$book = [
			"id" => $id,
			"title" => $title,
			"author" => $author,
			"genre" => $genre,
			"yearRead" => $yearRead,
			"recommended" => $recommended,
		];

		return $book;
	}

	

?>