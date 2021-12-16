<?php require $_SERVER['DOCUMENT_ROOT'] . "/template-parts/layout/header.php";

middleware('auth');

$auth = getAuth(); ?>

<main>

    <section id="user-edit" class="py-5">
        <div class="container">

            <h1>Modifier le profil de <?php echo $auth['username']; ?></h1>

            <form action="" method="POST">

                // FORM

            </form>

        </div>
    </section>

</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/template-parts/layout/footer.php"; ?>