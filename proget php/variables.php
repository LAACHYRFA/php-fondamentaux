<?php
$nom = "farah";
$age = 20;
$prix = 21.22;
$estconect = true;
 
echo "Nom : " . $nom . "<br>";
echo "Âge : " . $age . "<br>";
echo "Prix : " . $prix . " €<br>";
echo "Connecté : " . ($estConnecte ? "Oui" : "Non") . "<br>";

var_dump($nom);

$nombre = "5";
$nombreInt = (int)$nombre;
echo "Conversion : " . $nombreInt;
