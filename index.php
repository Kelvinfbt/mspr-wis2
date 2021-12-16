<?php

require_once 'functions/database.php';
require_once 'functions/users.php';
require_once 'functions/post.php';

require_once 'template-parts/layout/header.php';

middleware('auth');
$posts = getPosts();
?>

<main id="home">

    <section id="home-posts">
        <div class="col-6">
            <?php require_once 'template-parts/post-form.php'; ?>
            <hr>
            <h3 class="text-center mb-5">Dernières publications :</h3>

            <?php if ($posts): ?>
                <div class="posts-wrapper mx-auto" style="max-width: 500px;">
                    <div class="row g-4">
                        <?php foreach ($posts as $post): ?>
                            <div class="col-12">
                                <?php require 'template-parts/post.php'; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
    </section>
</main>


<?php require_once 'template-parts/layout/footer.php' ?>





