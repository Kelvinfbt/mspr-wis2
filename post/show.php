<?php

require_once '../../functions/database.php';
require_once '../../functions/helpers.php';
require_once '../../functions/users.php';
require_once '../../functions/post.php';

$post = getPosts($_GET['id']);
$author = getPostAuthor($post);

$page = [
    'body'=>$post['body'],
];

?>

<main>
    <div class="card mb-3">
        <img src="https://via.placeholder.com/100x50" class="card-img-top" alt="">
        <div class="card-body">
            <?php echo $post['body']; ?>
            <a href="">Likes</a>
            <p class="card-text"><small class="text-muted">il y a 10 min</small></p>
        </div>
    </div>
</main>
