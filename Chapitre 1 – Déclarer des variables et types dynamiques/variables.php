<?php
$nom = "SOUH4IL";
$age = 19;
$prix = 55.99;
$estConnecte = FALSE ;  

echo "Nom : " . $nom . "<br>";
echo "Âge : " . $age . "<br>";
echo "Prix : " . $prix . " €<br>";
echo "Connecté : " . ($estConnecte ? "Oui" : "Non") . "<br>";

var_dump($nom);
$nombre = "10";
$nombreInt = (int)$nombre;
echo "Conversion : " . $nombreInt;
