<?php require_once 'template-parts/layout/head.php';?>
<?php require_once 'template-parts/layout/navbar.php';

middleware('auth');

?>

<main id="home">

    <div>
        <div class="row">
            <div class="col">
                <?php require_once 'template-parts/layout/sidebar-menu.php'; ?>
            </div>
            <div class="col-6">

                <?php require_once 'template-parts/post.php'; ?>

            </div>
            <div class="col">

                <div>
                    <form class="d-flex py-3">
                        <input class="form-control me-2 shadow-sm" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn text-light bg-dark shadow-sm" type="submit">Search</button>
                    </form>
                </div>

                <div class="notifs-list">
                    <h4 class="text-center">Notifications</h4>
                    <div class="list-group shadow-sm">
                        <a href="#" class="list-group-item list-group-item-action py-3 border-secondary border-1">Noah Guillet</a>
                        <a href="#" class="list-group-item list-group-item-action py-3 border-secondary border-1">Dorian Candy</a>
                        <a href="#" class="list-group-item list-group-item-action py-3 border-secondary border-1">Kelvin Fabert</a>
                        <a href="#" class="list-group-item list-group-item-action py-3 border-secondary border-1">Luka Sarazin</a>
                    </div>
                </div>

                <div class="friends-list py-3">
                    <h4 class="text-center">Liste d'amis</h4>
                    <div class="list-group shadow-sm">
                        <a href="#" class="list-group-item list-group-item-action py-3 border-secondary border-1">Noah Guillet</a>
                        <a href="#" class="list-group-item list-group-item-action py-3 border-secondary border-1">Dorian Candy</a>
                        <a href="#" class="list-group-item list-group-item-action py-3 border-secondary border-1">Kelvin Fabert</a>
                        <a href="#" class="list-group-item list-group-item-action py-3 border-secondary border-1">Luka Sarazin</a>
                    </div>
                </div>
            </div>
        </div>



</main>



<?php require_once 'template-parts/layout/footer.php' ?>



