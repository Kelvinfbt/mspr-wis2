<?php

require_once '../../functions/database.php';
require_once '../../functions/helpers.php';
require_once '../../functions/users.php';
require_once '../../functions/post.php';
require_once '../../functions/upload.php';

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