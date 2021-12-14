<form id="post_form">
    <span class="h2">Ajouter un nouveau post</span>

    <div class="form-group mb-3">
        <label for="body"></label>
        <textarea class="form-control" placeholder="Leave a comment here" id="body"></textarea>
    </div>


    <div class="row g-1">

        <div class="col-md-6">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapsePicture" aria-expanded="false"
                    aria-controls="collapsePicture" class="btn btn-outline-secondary w-100">
                <img alt="" src="/assets/images/image.png" width="30px" height="30px" loading="lazy">
                <span>Photos/Vidéos</span>
            </button>
        </div>
        <div class="collapse" id="collapsePicture">
            <div class="card card-body">
                <form action="functions/upload.php" method="post" name="first_form" enctype="multipart/form-data" onsubmit="validation()">
                    <label for="file">Télécharger votre image</label><input class="input_media" type="file" name="userfile" />
                </form>
            </div>
        </div>


        <div class="col-md-6">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseTag" aria-expanded="false"
                    aria-controls="collapseTag" class="btn btn-outline-secondary w-100">
                <img alt="" src="/assets/images/tag.png" width="30px" height="30px" loading="lazy">
                <span>Tagger un ami</span>
            </button>
        </div>
        <div class="collapse" id="collapseTag">
            <div class="card card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Mon ami 1
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Mon amie 2
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Mon ami 3
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Mon amie 4
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        Mon amie 5
                    </li>
                </ul>
            </div>
        </div>


        <div class="col-md-6">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapsemotivation" aria-expanded="false"
                    aria-controls="collapsemotivation" class="btn btn-outline-secondary w-100">
                <img alt="" src="/assets/images/motivation.png" width="30px" height="30px" loading="lazy">
                <span>Votre motivation</span>
            </button>
        </div>
        <div class="collapse" id="collapsemotivation">
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when
                the user activates the relevant trigger.
            </div>
        </div>

        <div class="col-md-6">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapselieu" aria-expanded="false"
                    aria-controls="collapselieu" class="btn btn-outline-secondary w-100">
                <img alt="" src="/assets/images/lieu.png" width="30px" height="30px" loading="lazy">
                <span>Lieu</span>
            </button>
        </div>
        <div class="collapse" id="collapselieu">
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when
                the user activates the relevant trigger.
            </div>
        </div>


        <div class="col-md-6">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseGif" aria-expanded="false"
                    aria-controls="collapseGif" class="btn btn-outline-secondary w-100">
                <img alt="" src="/assets/images/gif.png" width="30px" height="30px" loading="lazy">
                <span>Gif</span>
            </button>
        </div>
        <div class="collapse" id="collapseGif">
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when
                the user activates the relevant trigger.
            </div>
        </div>

        <div class="col-md-6">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseSmiley" aria-expanded="false"
                    aria-controls="collapseSmiley" class="btn btn-outline-secondary w-100">
                <img alt="" src="/assets/images/smile.png" width="30px" height="30px" loading="lazy">
                <span>Smiley</span>
            </button>
        </div>
        <div class="collapse" id="collapseSmiley">
            <div class="card card-body">

            </div>
        </div>


    </div>
    <button class="btn btn-outline-primary">Publier</button>
</form>

<script>


</script>