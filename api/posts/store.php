<?php

require_once '../../functions/database.php';
require_once '../../functions/helpers.php';
require_once '../../functions/users.php';


middleware('auth');

/*$path = storeImage($image);*/

$auth = getAuth();

if (getValue($_POST) && isAdmin($auth)) {

    // On prépare les données depuis le formulaire
    $data = [
        'title' => getValue($_POST['title']),
        'media' => getValue($_POST['media']),
        'body' => getValue($_POST['body']),
        'user_id' => $auth['id'],
    ];

    print_r($data);



    // On créé l'article et on le stock en base
    //$postId = storePost($data);

    // On redirige l'utilisateur sur la page de l'article
    //header("Location: /crud/posts/show.php?id=$postId");
    //exit;
}