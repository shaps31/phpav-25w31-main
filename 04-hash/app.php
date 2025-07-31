<?php

// Mot de passe "en clair" reçu lors du formulaire de création de compte
$password = "password";

// Mot de passe haché pouvant être stocké en base de données
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;

// Au moment du formulaire d'authentification
if (password_verify($password, $hash)) {
    echo "Password is valid!";
} else {
    echo "Password is not valid!";
}
