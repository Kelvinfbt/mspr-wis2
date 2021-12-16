<?php

require $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/post.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/follows.php';

$auth = getAuth();

$data = [
    'user_id' => $auth['id'],
    'following_id' => $_GET['id'],
];

toggleFollow($data);
header("Location: /");
exit;
