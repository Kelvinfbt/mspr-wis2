<?php require 'template-parts/layout/head.php';
require_once './functions/helpers.php';
require_once './functions/database.php';
require_once './functions/users.php';
$author = getAuth();
middleware('auth');
$user = getAuth();
$post = getUserPosts($user['id']);
?>

    <main id="main">
        <section id="hero-account" class="shadow p-3 mb-5 bg-white rounded">
            <div class="container">
                <div class="row-account row">
                    <div class="avatar col-md-3">
                        <div class="w-25" id="welcome"></div>
                        <div class="profile-name">
                            <h1 class="h3"><?php echo $author['username']; ?></h1>
                        </div>
                    </div>
                    <div class="nav-account col-md-7 ">
                        <div class="btn-account position-absolute mt-5">

                            <a href="index.php" type="button" class="timeline btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-house" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd"
                                          d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                </svg>
                                Feed
                            </a>

                            <button type="button" class="friend btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                </svg>
                                Conseil
                            </button>

                            <button type="button" class="picture btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                                </svg>
                                Photos
                            </button>

                        </div>
                    </div>
                    <div class="update col-md-2">
                        <a class="btn btn-update" href="users/edit.php">Modifier mon profil
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>

                        </a>
                    </div>
                </div>
        </section>


        <section id="main-account">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="card container_account" style="width: 18rem;">
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
                    <div class="col-6">
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
                    </div>

                    <div class="col-3">
                        <div class="card card-img" style="width: 18rem;">
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


                        <div class="card card-add-friend" style="width: 18rem;">
                            <div class="card-header">
                                <h5 class="card-title text-center">Mes conseils sport</h5>
                            </div>
                            <div class="add-friend">
                                <div class="name">
                                    <img class="img-add-friend" src="assets/images/man-1.png" alt="Card image cap">
                                    <strong><span>Squat en folie</span></strong>
                                </div>
                                <div class="mutual-friend ms-5 p-2">
                                    <span>10 conseils</span>
                                </div>

                                <div class="name">
                                    <img class="img-add-friend" src="assets/images/man-1.png" alt="Card image cap">
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


<?php require 'template-parts/layout/footer.php';