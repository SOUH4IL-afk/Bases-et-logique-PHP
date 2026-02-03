<?php

$age = 20;

if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}

$note = 14;

if ($note >= 16) {
    echo "Excellent";
} elseif ($note >= 10) {
    echo "Passable";
} else {
    echo "Échec";
}

$jour = "Lundi";

switch ($jour) {
    case "Lundi":
        echo "Début de la semaine";
        break;
    case "Vendredi":
        echo "Fin de la semaine";
        break;
    default:
        echo "Jour normal";
}

