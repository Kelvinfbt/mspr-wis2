<?php

require_once 'template-parts/layout/head.php';
require_once 'functions/database.php';
require_once 'functions/post.php';

middleware('auth');

$posts = getPosts();
?>

<main id="home">

    <section id="home-posts">

        <div class="row g-4">
            <div class="col-3">
                <?php require_once 'template-parts/layout/sidebar.php'; ?>
            </div>
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
            </div>
            <div class="col-3">
                <?php require_once 'template-parts/layout/search.php' ?>
                <div class="notifs-list droite">
                    <div class="list-group shadow-sm">
                        <a class="list-group-item list-group-item-primary text-center">Conseils</a>
                        <a href="#" class="list-group-item">Musculation</a>
                        <a href="#" class="list-group-item">Fitness</a>
                    </div>
                </div>
                <div class="friends-list py-3 droite">
                    <div class="list-group shadow-sm">
                        <a href="#" class="list-group-item list-group-item-primary text-center">Liste d'amis</a>
                        <a href="#" class="list-group-item">Dorian Candy</a>
                        <a href="#" class="list-group-item">Kelvin Fabert</a>
                        <a href="#" class="list-group-item">Coline Cabus</a>
                        <a href="#" class="list-group-item">Noah Guillet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php require_once 'template-parts/layout/footer.php' ?>





