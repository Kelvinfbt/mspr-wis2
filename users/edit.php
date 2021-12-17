<?php
require_once "../template-parts/layout/head.php";
require_once '../functions/database.php';
require_once '../functions/helpers.php';
require_once '../functions/users.php';

middleware('auth');



$auth = getAuth(); ?>

    <main>

        <section id="user-edit" class="py-5">
            <div class="container">

                <h1>Modifier le profil de <?php echo $auth['username']; ?></h1>

                <form action="/api/users/update.php" method="POST">


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">username</label>
                        <input id="username" name="username" type="text" class="form-control" placeholder="Username" aria-label="username"
                               value="<?= $auth['username'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                               value="<?= $auth['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password" value="<?= $auth['password'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">About</label>
                        <input id="about" name="about" type="text" class="form-control" placeholder="About" aria-label="about"
                               value="">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">sport</label>
                        <input id="sport" name="sport" type="text" class="form-control" placeholder="Sport" aria-label="sport"
                               value="">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Lieu</label>
                        <input id="lieu" name="lieu" type="text" class="form-control" placeholder="Lieu" aria-label="lieu"
                               value="">
                    </div>

                    <select name="niveau" class="form-select" aria-label="Default select example">
                        <option selected>Niveau sportif</option>
                        <option value="0">Débutant</option>
                        <option value="1">Intermédiaire</option>
                        <option value="1">Confirmé</option>
                        <option value="1">Expert</option>
                    </select>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Salle de sport</label>
                        <input id="salle" name="salle" type="text" class="form-control" placeholder="Salle" aria-label="salle"
                               value="">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>




            </div>
        </section>

    </main>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/template-parts/layout/footer.php"; ?>