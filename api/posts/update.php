<?php

require $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/post.php';

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
    header("Location: /post/show.php?id=$postId");
}