<?php require "template-parts/layout/head.php";

middleware('guest');

?>

<main>
    <section id="register-form">
        <div class="container container_register">

            <div class="card mx-auto shadow mt-5">

                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card-image-register">
                                <div id="screen"></div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h1 class="text-center mb-5">Bienvenue !</h1>
                            <form class="form" action="api/users/store.php" method="post">

                                <div class="mb-3">
                                    <label for="username" class="form-label"></label>
                                    <input type="username" class="form-control" name="username"
                                           aria-describedby="username" placeholder="Nom d'utilisateur">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="email" class="form-control" name="email"
                                           aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="email" class="form-control" name="confirm-email"
                                           aria-describedby="emailHelp" placeholder="Confirmez votre Email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"></label>
                                    <input type="password" class="form-control" name="password"
                                           placeholder="Mot de Passe">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"></label>
                                    <input type="password" class="form-control" name="confirm-password"
                                           placeholder="Confirmez votre Mot de Passe">
                                </div>

                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    J'accepte les termes et conditions
                                </label>

                                <div class="mb-3 form-check">
                                    <div class="d-grid gap-2 mt-3">
                                        <button type="submit" class="btn btn-light text-white">S'enregistrer</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<?php require "template-parts/layout/footer.php" ?>