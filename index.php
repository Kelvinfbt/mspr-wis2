<?php require_once 'template-parts/layout/head.php';
require_once 'functions/database.php';

middleware('auth');

?>

<main id="home">

    <div>
        <div class="row">
            <div class="col">
                <?php require_once 'template-parts/layout/sidebar.php'; ?>
            </div>

                <div class="col-6">

                    <?php require_once 'template-parts/post-form.php'; ?>

                </div>

            <div class="col">

                <div>
                    <form class="d-flex py-3 droite">
                        <input class="form-control me-2 shadow-sm" type="search" placeholder="Search"
                               aria-label="Search">
                        <button class="btn btn-search" type="submit">Search</button>
                    </form>
                </div>

                <div class="notifs-list droite">
                    <div class="list-group shadow-sm">
                        <a class="list-group-item list-group-item-primary text-center">Conseils</a>
                        <a href="#" class="list-group-item">Musculation</a>
                        <a href="#" class="list-group-item">Fitness</a>

                    </div>
                </div>

                <div class="friends-list py-3 droite">
                    <div class="list-group shadow-sm">
                        <a href="#" class="list-group-item list-group-item-primary text-center">Liste d'amis</a>
                        <a href="#" class="list-group-item">Dorian Candy</a>
                        <a href="#" class="list-group-item">Kelvin Fabert</a>
                        <a href="#" class="list-group-item">Coline Cabus</a>
                        <a href="#" class="list-group-item">Noah Guillet</a>
                    </div>
                </div>
            </div>
        </div>


</main>


<?php require_once 'template-parts/layout/footer.php' ?>





