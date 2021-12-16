<?php

require_once '../../functions/database.php';
require_once '../../functions/helpers.php';
require_once '../../functions/users.php';
require_once '../../functions/post.php';
require_once '../../functions/like.php';


middleware('auth');

/*$path = storeImage($image);*/

$auth = getAuth();



    // On prépare les données depuis le formulaire
    $data = [
        'user_id' => $auth['id'],
        'post_id' => $_GET['id'],
    ];

    //print_r($data);

    // On créé l'article et on le stock en base

    toggleLike($data);

    // On redirige l'utilisateur sur la page de l'article

    header("Location: /");
    //exit;

