<?php require 'template-parts/layout/head.php'; ?>


<main id="main">
    <section id="hero-account" class="shadow p-3 mb-5 bg-white rounded">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="images" src="https://via.placeholder.com/150" alt="Avatar">
                    <span>Tom HEZHJ</span>
                </div>
                <div class="col-md-7">
                    <div class="btn-account position-absolute mt-5">


                        <button type="button" class="timeline btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd"
                                      d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                            Publications
                        </button>


                        <button type="button" class="about btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            A propos
                        </button>


                        <button type="button" class="friend btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                            </svg>
                            Amies
                        </button>


                        <button type="button" class="picture btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-image" viewBox="0 0 16 16">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                            </svg>
                            Photos
                        </button>


                        <button type="button" class="video btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-camera-video" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
                            </svg>
                            Vidéos
                        </button>

                    </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="edit btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        Modifier le profil
                    </button>
                </div>
            </div>
    </section>


    <section id="main-account">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card container_account" style="width: 18rem;">
                        <div class="card-info">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong><span class="list-title">À Propos</span></strong>
                                    <span class="list-body">hello</span>
                                </li>
                                <li class="list-group-item">
                                    <strong><span class="list-title">Rejoins:</span></strong>
                                    <span class="list-body">hello</span>
                                </li>
                                <li class="list-group-item">
                                    <strong><span class="list-title text-dark">Habite à: </span></strong>
                                    <span class="list-body">hello</span>
                                </li>
                                <li class="list-group-item">
                                    <strong><span class="list-title">Email:</span></strong>
                                    <span class="list-body">hello</span>
                                </li>
                                <li class="list-group-item">
                                    <strong><span class="list-title">Site Web:</span></strong>
                                    <span class="list-body">hello</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-account bg-white mb-3" style="max-width: 2000px;">
                        <div class="card-header">Nom de l'utilisateur</div>
                        <div class="card-body">
                            <h5 class="card-title">Titre publi</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium
                                aperiam culpa dolorem, error esse et eveniet, exercitationem fuga iste iusto minima
                                numquam suscipit. Animi autem beatae commodi, consectetur, facilis, libero mollitia
                                natus officiis perspiciatis quae sequi soluta sunt temporibus unde veniam. Adipisci
                                alias, aliquid blanditiis delectus impedit modi nesciunt placeat similique. Ab delectus
                                eligendi esse, et ipsum, iusto laboriosam maxime mollitia nam nulla optio placeat
                                recusandae sequi sunt suscipit temporibus, ut voluptates! Adipisci alias architecto
                                dignissimos eligendi eum ex, exercitationem explicabo laboriosam libero minus mollitia
                                nam nesciunt, nulla odit, perferendis placeat quaerat quas reiciendis repellat sint
                                soluta ullam voluptatem.</p>
                            <img src="https://via.placeholder.com/600" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-3">
                </div>
            </div>
        </div>
    </section>
</main>