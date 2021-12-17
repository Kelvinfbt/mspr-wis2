<?php

require $_SERVER['DOCUMENT_ROOT'] . 'functions/database.php';
require $_SERVER['DOCUMENT_ROOT'] . 'functions/users.php';
require $_SERVER['DOCUMENT_ROOT'] . 'functions/post.php';

require_once 'template-parts/layout/header.php';

middleware('auth');
$posts = getPosts();
?>

<main id="home">
    <section id="home-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
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
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php require_once 'template-parts/layout/right-column.php' ?>
                </div>
            </div>
    </section>
</main>

<?php require_once 'template-parts/layout/footer.php' ?>





