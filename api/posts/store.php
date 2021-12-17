<?php


require $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/post.php';


middleware('auth');

$auth = getAuth();

$data = ['media' => null];


if (getValue($_FILES['media'['tmp_name']])) {




    $data['media'] = 'chemin/vers/image';
}


if (getValue($_POST)) {

    // On prépare les données depuis le formulaire
    $data = [
        'body' => getValue($_POST['body']),
        'user_id' => $auth['id'],
    ];


    // On créé l'article et on le stock en base
    $postId = storePost($data);

    // On redirige l'utilisateur sur la page de l'article
    header("Location: /");
    exit;
}