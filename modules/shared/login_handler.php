<?php
session_start();

// Configuration (à remplacer par vos propres valeurs)
require_once 'config.php';

// Validation des données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'user_type', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Vérification si les champs sont remplis
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Veuillez remplir tous les champs.";
        header('Location: login.php');
        exit();
    }

    // Vérification des identifiants (à remplacer par votre logique d'authentification)
    // Ici, on simule une base de données avec un tableau associatif
    $users = [
        'formateur@solicode.com' => 'motdepasse_hashé',
        'apprenant@solicode.com' => 'autre_motdepasse_hashé',
        // ...
    ];

    // Hasher le mot de passe saisi pour comparaison
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (array_key_exists($email, $users) && password_verify($hashed_password, $users[$email])) {
        // Authentification réussie
        $_SESSION['user'] = $email;
        header('Location: ' . $config['home_url']); // Rediriger vers la page d'accueil correspondante
        exit();
    } else {
        $_SESSION['error'] = "Identifiants incorrects.";
        header('Location: login.php');
        exit();
    }
}