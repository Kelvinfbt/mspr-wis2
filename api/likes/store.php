<?php

require $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/post.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/like.php';


middleware('auth');


$auth = getAuth();

    // On prépare les données depuis le formulaire
    $data = [
        'user_id' => $auth['id'],
        'post_id' => $_GET['id'],
    ];

    //print_r($data);
    // On créé l'article et on le stock en base

    like($data);

    // On redirige l'utilisateur sur la page de l'article

    header("Location: /");
    //exit;


