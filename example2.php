<?php

require('./track.php');
	
	$pdo = new PDO('sqlite:chinook.db'); //pdo is a global class so preface with slash

	$track = Spotify\Track::find(1, $pdo);

	echo $track->getSize('MB');


?>

