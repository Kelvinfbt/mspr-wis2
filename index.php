<?php require_once 'template-parts/layout/head.php' ?>

<main id="home">

    <section>

        <div class="">
            <div class="row g-3">
                <div class="col-lg">
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
                    <img src="https://via.placeholder.com/100x50" class="card-img-top" alt="">
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
            <div class="col py-3">
                <div class="card shadow mb-3">
                    <h4>Notifications récentes</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Nouveau Like</h5>
                                <small>1 days ago</small>
                            </div>
                            <p class="mb-1">Coline a liker votre dernier post</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">New Abonné</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Dorian s'est abonné à votre compte</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">New Abonné</h5>
                                <small class="text-muted">4 days ago</small>
                            </div>
                            <p class="mb-1">Noah s'est abonné à votre compte</p>
                        </a>
                    </div>
                </div>

                <div class="card shadow">
                    <h4>Liste d'amis</h4>
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