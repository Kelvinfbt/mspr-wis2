<?php

require_once '../functions/helpers.php';
require_once '../functions/users.php';

middleware('auth');

if ($id = getValue($_GET['id'])) {
    $user = getUser($id);
} else {
    $user = getAuth();
}

$posts = getUserPosts($user['id']);

require_once '../template-parts/layout/head.php'; ?>

    <main id="main">

        <section class="py-5">
            <div class="container">

                <img class="img-fluid"
                     src="<?php echo getAvatarUrl($user['email']); ?>"
                     alt="Photo de <?php echo $user['username']; ?>"
                     title="Photo de profil"
                     width="200"
                     height="200"
                     loading="lazy"
                >
                <h1 class="h1"><?php echo $user['username']; ?></h1>
            </div>
        </section>

        <section>
            <div class="container">

                <h2 class="h2">Liste des publications</h2>

                <div class="row g-4">
                    <?php foreach ($posts as $post): ?>
                        <div class="col-md-6 col-lg-4">
                            <?php require '../template-parts/post.php'; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

    </main>

<?php require_once '../template-parts/layout/footer.php'; ?>