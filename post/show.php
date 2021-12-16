<?php
require_once '../template-parts/layout/head.php';
require_once '../functions/database.php';
require_once '../functions/helpers.php';
require_once '../functions/users.php';
require_once '../functions/post.php';

$post = getPost($_GET['id']);

if (!getValue($post)) {
    header('Location: /');
    exit;
}

$author = getPostAuthor($post);

$page = [
    'body' => $post['body'],
    'media' => $post['media'],
]; ?>

<main>
    <section id="show-post">
        <div class="container">
            <div class="card-header"></div>
            <p>Nom d'utilisateur</p>
            <div class="card-image-post">
                <img src="https://via.placeholder.com/500x500" alt="">
            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-outline-danger btn-sm">
                    like
                </button>
                <p><?php echo $post['body']; ?></p>
                <form action="../api/likes/store.php" method="POST">
                </form>
                <p class="card-text"><small class="text-muted">il y a 10 min</small></p>
                <a href="api/posts/edit.php?id=<?php echo $post['id'] ?>">Modifier</a>

            </div>
        </div>
    </section>
</main>
