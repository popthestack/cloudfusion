--TEST--
AmazonPAS::vehicle_part_search

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Use vehicle_search() to look up these values
	$pas = new AmazonPAS();
	$response = $pas->vehicle_part_search(
		59, // Honda
		752, // Civic
		2005
	);

	// Success?
	var_dump($response->isOK());
?>

--EXPECT--
bool(true)
