<?php
require $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/post.php';

$id = $_GET['id'];

destroyPost($id);

header('Location: /account.php');