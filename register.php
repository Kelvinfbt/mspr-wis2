<?php require "template-parts/layout/head.php" ?>

<section id="register-form">
    <div class="container container_register">
        <div class="card mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-image">
                            <img src="assets/images/humaaans2.png">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h1 class="text-center">S'enregistrer !</h1>
                        <form class="form">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirmer votre Email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de Passe">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"></label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer votre Mot de Passe">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">J'accepte les termes et conditions</label>
                                <div class="d-grid gap-2 mt-3">
                                    <button type="submit" class="btn btn-dark">S'enregistrer</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php require "template-parts/layout/footer.php" ?>
