<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "loginpage";
	$username = "root";
	$password = "tb84cubjvked";

	$conn = new PDO(
		"mysql:host=$servername; dbname=loginpage",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
