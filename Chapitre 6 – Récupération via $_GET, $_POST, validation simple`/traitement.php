<?php

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST" || $method === "GET") {

    $nom   = trim($_REQUEST['nom'] ?? '');
    $email = trim($_REQUEST['email'] ?? '');

    if (empty($nom) || empty($email)) {
        echo " Tous les champs sont obligatoires.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo " Email invalide.";
        exit;
    }

    echo " Bonjour <strong>$nom</strong>, votre email est <strong>$email</strong>.";
}
