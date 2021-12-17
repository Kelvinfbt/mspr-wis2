<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';

middleware('auth');

require_once $_SERVER['DOCUMENT_ROOT'] . '/template-parts/layout/header.php';

$author = getAuth();
$user = getAuth();
$post = getUserPosts($user['id']);
?>

    <main id="main">
        <section id="main-account">
            <div class="container">
                <div class="row">
                    <div class="col-3 py-5">
                        <div class="card container_account">
                            <div class="card-info">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong><span class="list-title">À Propos :</span></strong>
                                        <span class="list-body"><?php echo $author['about']; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong><span class="list-title">Sport : </span></strong>
                                        <span class="list-body"><?php echo $author['sport']; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong><span class="list-title text-dark">Habite à : </span></strong>
                                        <span class="list-body"><?php echo $author['lieu']; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong><span class="list-title">Niveau : </span></strong>
                                        <span class="list-body"><?php echo $author['niveau']; ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong><span class="list-title">Salle de sport : </span></strong>
                                        <span class="list-body"><?php echo $author['salle']; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 py-5">
                        <div class="card card-account bg-white mb-3" style="max-width: 2000px;">
                            <div class="card-header text-center"><?php echo $author['username']; ?></div>

                            <div class="profile-publication">
                                <div class="py-4">
                                    <h2 class="h2 text-center">Dernières publications : </h2>
                                    <ul class="mt-4 p-2 rounded-2">
                                        <li>
                                            <?php if ($posts = getUserPosts($user['id'])): ?>

                                                <?php foreach ($posts as $post): ?>

                                                    <?php require 'template-parts/post.php'; ?>

                                                <?php endforeach; ?>

                                            <?php endif; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 py-5">
                        <a class="btn btn-primary float-end mb-3" href="users/edit.php">
                            <span>Modifier mon profil</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>

                        <div class="card card-img">
                            <div class="card-body card-header">
                                <h5 class="card-title text-center ">Mes amis</h5>
                            </div>
                            <div class="images-card">
                                <img class="card-img-top" src="assets/images/boy-2.png" alt="Card image cap">
                                <img class="card-img-top" src="assets/images/boy-5.png" alt="Card image cap">
                                <img class="card-img-top" src="assets/images/boy-3.png" alt="Card image cap">
                                <img class="card-img-top" src="assets/images/girl-2.png" alt="Card image cap">
                                <img class="card-img-top" src="assets/images/girl-5.png" alt="Card image cap">
                                <img class="card-img-top" src="assets/images/girl-1.png" alt="Card image cap">
                                <img class="card-img-top" src="assets/images/boy-4.png" alt="Card image cap">
                                <img class="card-img-top" src="assets/images/boy.png" alt="Card image cap">
                                <img class="card-img-top" src="assets/images/girl-3.png" alt="Card image cap">
                            </div>
                        </div>


                        <div class="card card-add-friend">
                            <div class="card-header">
                                <h5 class="card-title text-center">Mes conseils sport</h5>
                            </div>
                            <div class="add-friend">
                                <div class="name">
                                    <img class="img-add-friend">
                                    <strong><span>Squat en folie</span></strong>
                                </div>
                                <div class="mutual-friend ms-5 p-2">
                                    <span>10 conseils</span>
                                </div>

                                <div class="name">
                                    <img class="img-add-friend">
                                    <strong><span>Fitness</span></strong>
                                </div>
                                <div class="mutual-friend ms-5 p-2">
                                    <span>3 conseils</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/template-parts/layout/footer.php'; ?>