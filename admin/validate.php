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

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$adminname = test_input($_POST["adminname"]);
// Plaintext password entered by the user
$plaintext_password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin where adminname like '%$adminname%'");
	$stmt->execute();
	$users = $stmt->fetchAll();

  
// The hashed password retrieved from database
foreach($users as $user)
	$hash = $user['password'];


// Verify the hash against the password entered
$verify = password_verify($plaintext_password, $hash);

// Print the result depending if they match
if ($verify) {
	header("Location: adminpage.php");
} else {
	echo "<script language='javascript'>";
			header("Location: wrong/wrongpass.php");
			echo "</script>";
			die();
}

/*if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$adminname = test_input($_POST["adminname"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['adminname'] == $adminname) &&
			($user['password'] == $password)) {
				header("Location: adminpage.php");
		}
		else {
			echo "<script language='javascript'>";
			header("Location: wrong/wrongpass.php");
			echo "</script>";
			die();
		}
	}
}*/

?>
