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
<<<<<<< HEAD
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

=======
        <div class="container container-post">
            <div class="card-post card mb-3 mx-auto shadow mt-3">
                <img src="https://via.placeholder.com/100x50" class="card-img-top" alt="">
                <div class="card-content card-body">
                    <form action="../api/likes/store.php?id=<?php echo $post['id'] ?>" method="POST">
                        <button type="submit" class="btnpost btn btn-outline-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                            </svg>
                        </button>
                    </form>
                    <p class="text-post"><?php echo $post['body']; ?></p>
                    <p class="card-text"><small class="text-muted">il y a 10 min</small></p>
                    <a href="/api/posts/edit.php?id=<?php echo $post['id'] ?>">Modifier</a>
                </div>
>>>>>>> master
            </div>
        </div>
    </section>
</main>
