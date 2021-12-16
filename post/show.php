<?php
require_once '../template-parts/layout/head.php';
require_once '../functions/database.php';
require_once '../functions/helpers.php';
require_once '../functions/users.php';
require_once '../functions/post.php';

$post = getPost($_GET['id']);

if(!getValue($post)){
    header('Location: /');
    exit;
}

$author = getPostAuthor($post);

$page = [
    'body' => $post['body'],
    'media' => $post['media'],
]; ?>

<main>
    <div class="container">
        <div class="card mb-3 mx-auto shadow mt-3">
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
    </div>
</main>
<a href="api/post/edit.php?id=<?php echo $post['id'] ?>">Modifier</a>
