<?php

require_once '../../functions/database.php';
require_once '../../functions/helpers.php';
require_once '../../functions/users.php';
require_once '../../functions/post.php';

$id = $_GET['id'];

if (getValue($_POST) && $id) {

    // On prépare les données depuis le formulaire
    $data = [
        //'media'     => getValue($_POST['media']),
        'body'      => getValue($_POST['body']),
    ];

    // On créé l'article et on le stock en base
    $postId = updatePost($id, $data);

    // On redirige l'utilisateur sur la page de l'article
    header("Location: /posts/show.php?id=$postId");
}