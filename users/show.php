<?php

require_once '../functions/helpers.php';
require_once '../functions/users.php';
require_once '../functions/follows.php';


middleware('auth');

if ($id = getValue($_GET['id'])) {
    $user = getUser($id);
} else {
    $user = getAuth();
}

$posts = getUserPosts($user['id']);
?>

<?php require_once '../template-parts/layout/head.php'; ?>

<?php require_once '../template-parts/layout/header-friends.php' ?>


    <main id="main">

        <section id="main-account">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="card container_account" style="width: 18rem;">
                            <div class="card-info">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong><span class="list-title">À Propos :</span></strong>
                                        <span class="list-body">Passionné de musculation depuis toujours, j'aime partager mes progrès avec mes amis et apprendre des nouvelles astuces ! 😊</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong><span class="list-title">Sport : </span></strong>
                                        <span class="list-body">Musculation</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong><span class="list-title text-dark">Habite à : </span></strong>
                                        <span class="list-body">Nantes</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong><span class="list-title">Niveau : </span></strong>
                                        <span class="list-body">Intermédiaire</span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong><span class="list-title">Salle de sport : </span></strong>
                                        <span class="list-body">Basic fit</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-account bg-white mb-3" style="max-width: 2000px;">
                            <div class="card-header text-center"><?php echo $user['username']; ?></div>
                            <div class="card-body">
                                <?php foreach ($posts as $post): ?>
                                    <div class="col-md-6 col-lg-4">
                                        <?php require '../template-parts/post-form.php'; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card card-img" style="width: 18rem;">
                            <div class="card-body card-header">
                                <h5 class="card-title text-center ">Mes amis</h5>
                            </div>
                            <div class="images-card">
                                <img class="card-img-top" src="../assets/images/boy-2.png" alt="Card image cap">
                                <img class="card-img-top" src="../assets/images/boy-5.png" alt="Card image cap">
                                <img class="card-img-top" src="../assets/images/boy-3.png" alt="Card image cap">
                                <img class="card-img-top" src="../assets/images/girl-2.png" alt="Card image cap">
                                <img class="card-img-top" src="../assets/images/girl-5.png" alt="Card image cap">
                                <img class="card-img-top" src="../assets/images/girl-1.png" alt="Card image cap">
                                <img class="card-img-top" src="../assets/images/boy-4.png" alt="Card image cap">
                                <img class="card-img-top" src="../assets/images/boy.png" alt="Card image cap">
                                <img class="card-img-top" src="../assets/images/girl-3.png" alt="Card image cap">
                            </div>
                        </div>


                        <div class="card card-add-friend" style="width: 18rem;">
                            <div class="card-header">
                                <h5 class="card-title text-center">Mes conseils sport</h5>
                            </div>
                            <div class="add-friend">
                                <div class="name">
                                    <img class="img-add-friend" src="../assets/images/man-1.png" alt="Card image cap">
                                    <strong><span>Squat en folie</span></strong>
                                </div>
                                <div class="mutual-friend ms-5 p-2">
                                    <span>10 conseils</span>
                                </div>

                                <div class="name">
                                    <img class="img-add-friend" src="../assets/images/man-1.png" alt="Card image cap">
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


<?php require_once '../template-parts/layout/footer.php'; ?>