<?php
require $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';

middleware('auth');

    $user = getAuth();

if (getValue($user)) {

    // On prépare les données depuis le formulaire
    $data = [
        'username'     => getValue($_POST['username']),
        'about'     => getValue($_POST['about']),
        'sport'     => getValue($_POST['sport']),
        'lieu'     => getValue($_POST['lieu']),
        'niveau'     => getValue($_POST['niveau']),
        'salle'     => getValue($_POST['salle']),
    ];


    $userId = updateUser($user['id'], $data);

    // On redirige l'utilisateur sur la page de l'article
    header("Location: /account.php");
}