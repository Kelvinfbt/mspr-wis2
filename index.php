<?php require_once 'template-parts/layout/head.php';

middleware('auth');

?>

<main id="home">

    <div>
        <div class="row">
            <div class="col">
                <?php require_once 'template-parts/layout/sidebar.php'; ?>
            </div>

                <div class="col-6">
                    <?php require_once 'template-parts/post.php'; ?>

                </div>

            <div class="col">

                <div>
                    <form class="d-flex py-3">
                        <input class="form-control me-2 shadow-sm" type="search" placeholder="Search"
                               aria-label="Search">
                        <button class="btn" type="submit">Search</button>
                    </form>
                </div>

                <div class="notifs-list">
                    <div class="list-group shadow-sm">
                        <a class="list-group-item list-group-item-secondary text-center">Notifications</a>
                        <a href="#" class="list-group-item">Dorian Candy</a>
                        <a href="#" class="list-group-item">Kelvin Fabert</a>

                    </div>
                </div>

                <div class="friends-list py-3">
                    <div class="list-group shadow-sm">
                        <a href="#" class="list-group-item list-group-item-secondary text-center">Liste d'amis</a>
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





