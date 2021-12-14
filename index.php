<?php require_once 'template-parts/layout/head.php' ?>

<main id="home">

    <section>

        <div>
            <div class="row g-3">

                <div class="col-lg">
                    <?php require_once 'template-parts/layout/sidebar-menu.php'; ?>
                </div>

                    <?php require_once 'template-parts/post.php'; ?>
                <div class="col-6">
                    <div>
                        <form class="d-flex py-3">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn text-light bg-dark" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/100x50" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Nouvelle séance du jour</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur
                                culpa
                                deleniti doloribus dolorum enim fugiat iste, minus, nam optio perspiciatis recusandae
                                rerum
                                soluta tempore, vero voluptas. Accusantium deserunt dolore excepturi explicabo laborum,
                                minus modi molestias nostrum obcaecati possimus saepe sint.</p>
                            <p class="card-text"><small class="text-muted">il y a 10 min</small></p>
                        </div>
                    </div>


                <div class="list col py-3">
                    <div class="notifs-list">
                        <h4 class="text-center">Notifications</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action py-3">Noah Guillet</a>
                            <a href="#" class="list-group-item list-group-item-action py-3">Dorian Candy</a>
                            <a href="#" class="list-group-item list-group-item-action py-3">Kelvin Fabert</a>
                            <a href="#" class="list-group-item list-group-item-action py-3">Luka Sarazin</a>
                        </div>
                    </div>

                    <div class="friends-list py-3">
                        <h4 class="text-center">Liste d'amis</h4>
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