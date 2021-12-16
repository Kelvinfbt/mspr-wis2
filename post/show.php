<?php

require_once '../functions/database.php';
require_once '../functions/helpers.php';
require_once '../functions/users.php';
require_once '../functions/post.php';




$post = getPosts($_GET['id']);
$author = getPostAuthor($post);


if ($id = getValue($_GET['id'])) {
    $user = getUser($id);
} else {
    $user = getAuth();
}


$body = $post['body'];

$page = [
        'body'=>$post['body'],
 ];

?>

<main>
    <div class="card mb-3">
        <img src="https://via.placeholder.com/100x50" class="card-img-top" alt="">
        <div class="card-body">
            <p><?php echo $post['body']; ?></p>
            <form action="../api/likes/store.php" method="POST">
                <button type="submit" class="btn btn-outline-danger btn-sm">
                    like
                </button>
            </form>
            <p class="card-text"><small class="text-muted">il y a 10 min</small></p>
        </div>
    </div>
</main>
