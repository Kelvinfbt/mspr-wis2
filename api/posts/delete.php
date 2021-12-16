<?php
require_once '../../functions/helpers.php';
require_once '../../functions/post.php';

$id = $_GET['id'];

destroyPost($id);

header('Location: /account.php');