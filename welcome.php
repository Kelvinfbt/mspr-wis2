
<?php require $_SERVER['DOCUMENT_ROOT'] .'template-parts/layout/head.php';

?>

<main style="background-color: #ffffff; height: 100vh;">
    <section class="container-fluid p-5">

        <div class="row gy-5 p-5">
            <div class="col d-flex justify-content-center mr-5 p-5 h-50">
                <a type="button" href="register.php" class="btn btn-welcome">Incription</a>
            </div>
            <div class="w-50" id="welcome"></div>
            <div class="col d-flex justify-content-center ml-5 p-5 h-50">
                <a type="button" href="login.php" class="btn btn-welcome">Connexion</a>
            </div>
        </div>
    </section>
</main>

<script src="/assets/js/app.js"></script>