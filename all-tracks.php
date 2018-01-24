<?php

	require('./track.php');
	
	$pdo = new PDO('sqlite:chinook.db'); //pdo is a global class so preface with slash

	$tracks = Spotify\Track::all($pdo);

	foreach($tracks as $track){
		echo "Name: " . $track->Name ."\Size:" . $track->getSize('MB');
		echo '<hr>';
	}
?>