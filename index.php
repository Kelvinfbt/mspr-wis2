<?php require_once 'template-parts/layout/head.php' ?>

<main id="home">

    <section>

        <div class="container">
            <div class="row g-3">
                <div class="col-lg" style="max-width: 280px;">
                    <?php require_once 'template-parts/layout/sidebar-menu.php'; ?>
                </div>
            <div class="col-6">
                <div>
                    <form class="d-flex py-3">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn shadow text-light bg-dark" type="submit">Search</button>
                    </form>
                </div>

                <div class="card mb-3 shadow">
                    <img src="https://via.placeholder.com/100x50" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nouvelle séance du jour</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa
                            deleniti doloribus dolorum enim fugiat iste, minus, nam optio perspiciatis recusandae rerum
                            soluta tempore, vero voluptas. Accusantium deserunt dolore excepturi explicabo laborum,
                            minus modi molestias nostrum obcaecati possimus saepe sint.</p>
                        <p class="card-text"><small class="text-muted">il y a 10 min</small></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow mb-3">
                    <h5>Notifications récentes</h5>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action py-3">Notification 1</a>
                        <a href="#" class="list-group-item list-group-item-action py-3">Notification 2</a>
                        <a href="#" class="list-group-item list-group-item-action py-3">Notification 3</a>
                        <a href="#" class="list-group-item list-group-item-action py-3">Notification 4</a>
                    </div>
                </div>

                <div class="card shadow">
                    <h5>Liste d'amis</h5>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action py-3">Noah Guillet</a>
                        <a href="#" class="list-group-item list-group-item-action py-3">Dorian Candy</a>
                        <a href="#" class="list-group-item list-group-item-action py-3">Kelvin Fabert</a>
                        <a href="#" class="list-group-item list-group-item-action py-3">Luka Sarazin</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>