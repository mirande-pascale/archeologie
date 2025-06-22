<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "archeologie";

$conn = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}
?>
