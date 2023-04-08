<?php

//TO DO :  
//Ajouter vérification connexion
//Ajouter récupération d'erreur
//JS pour bouton et multiplication
//Voir pour bouton de réinitialisation script

// Create connection
$conn = new \PDO('mysql:host=localhost;dbname=shoesize;charset=utf8', 'root', '');

// Check connection
// if ($conn->connect_error) {
// 	die("Connection failed: "
// 		. $conn->connect_error);
// }
// else
// {
//     foreach()
// }
$sql1 = "SELECT size, converted FROM `convert`;";
$sql2 = "SELECT name, size FROM `object`;";

$statement1 = $conn->query($sql1);
$statement2 = $conn->query($sql2);

$data1 = [];
$data2 = [];

while($row = $statement1->fetch())
{
	$shoes =[$row['size'], $row['converted']];
	$data1[] = $shoes;
}
while($row = $statement2->fetch())
{
	$building =[$row['name'], $row['size']];
	$data2[] = $building;
}
