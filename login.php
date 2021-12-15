<?php require_once 'template-parts/layout/head.php';

middleware('guest');
?>
    <section id="login-form">
        <div class="container container_login">
            <div class="card mx-auto shadow mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="card-image">
                                <div id="register"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="text-center">Se Connecter !</h1>
                            <form class="form" action="api/auth/login.php">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="email" class="form-control" name="email"
                                           aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"></label>
                                    <input type="password" class="form-control" name="password"
                                           placeholder="Mot de Passe">
                                </div>
                                <input class="form-check-input mb-3" type="checkbox" value="" id="invalidCheck">
                                <label class="form-check-label" for="invalidCheck">
                                    Rester Connecté
                                </label>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-light text-white">Se connecter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<?php require "template-parts/layout/footer.php" ?>