<?php require "template-parts/layout/head.php" ?>

<h1 class="text-center">S'enregistrer !</h1>

<div class="container">
    <form class="card">
        <div class="mb-3 text-center">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 text-center">
            <label for="exampleInputEmail1" class="form-label">Confirmer votre Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 text-center">
            <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 text-center">
            <label for="exampleInputPassword1" class="form-label">Confirmer votre Mot de Passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">J'accepte les termes et conditions</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">S'enregistrer</button>
    </form>
</div>
