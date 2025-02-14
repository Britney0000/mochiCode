<?php
$servername = "localhost";
$username = "root"; // Par défaut, sous MAMP, l'utilisateur est "root"
$password = "root"; // Sous MAMP, le mot de passe par défaut est "root"
$dbname = "kdrama_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>

