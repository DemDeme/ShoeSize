<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoesize";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
$name_object = htmlspecialchars($_POST['name-object']);
$size_object = $_POST['size-object'];

$sql = "INSERT INTO object VALUES ('$name_object', '$size_object')";

if ($conn->query($sql) === TRUE) {
	echo "Objet inséré avec succès <br> <a href='index.php'>Retour à la page d'accueil</a>";
} else {
	echo "Error: "."<br>" . $conn->error;
}
// Close connection
mysqli_close($conn);