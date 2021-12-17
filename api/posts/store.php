<?php

require $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/post.php';

middleware('auth');

$auth = getAuth();


if (getValue($_POST)) {

    // On prépare les données depuis le formulaire
    $data = [
        //'media' => getValue($_POST['media']),
        'body' => getValue($_POST['body']),
        'user_id' => $auth['id'],
    ];

    // On créé l'article et on le stock en base
    $postId = storePost($data);

    // On redirige l'utilisateur sur la page de l'article
   header("Location: /post/show.php?id=$postId");
    exit;
}