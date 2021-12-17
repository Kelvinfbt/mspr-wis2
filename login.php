<?php require $_SERVER['DOCUMENT_ROOT'] . 'template-parts/layout/head.php';

middleware('guest');
?>
    <section id="login-form">
        <div class="container-fluid container_login">
            <div class="card-body mx-auto shadow mt-5">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card-image">
                            <div id="login"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h1 class="text-center">Se Connecter !</h1>
                        <form class="form" action="api/auth/login.php" method="post">

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
                                <button type="submit" style=" margin-left: 0 ; background-color: #BAEEAE"
                                        class="w-50 btn btn-login">Se connecter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>

<script src="/assets/js/app.js"></script>