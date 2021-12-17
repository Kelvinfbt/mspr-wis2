<?php
require_once '../../functions/post.php';

$post = getPost($_GET['id']);

$page = ['title' => "Modifier l'article"];

$author = getPostAuthor($post);
$_POST['body'] = $post['body'];
$page = [
    'body' => $post['body'],
    'media' => $post['media'],
];

require_once '../../template-parts/layout/head.php';

?>


<form action="/api/posts/delete.php?id=<?php echo $post['id']; ?>" method="POST" class="mt-2 float-end">
    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
</form>


<div class="row-cols-3">
    <div class="col-lg-6">
        <form id="post_form" class="form pt-4" method="POST"
              action="/api/posts/update.php?id=<?php echo $post['id']; ?>"
              style="width: 700px; margin-left: auto; margin-right: auto">
            <h1 class="h1 text-center">Modifier le post</h1>
            <div class="form-group mb-3">
                <label for="body"></label>
                <textarea name="body" class="text-post form-control" placeholder="Ajouter un nouveau post" id="body">
            <?php echo $_POST['body']; ?>
        </textarea>
            </div>

            <div id="choose" class="row g-1">

                <div class="col-md-6">
                    <label for="media"></label>
                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapsePicture"
                            class="btn btn-post w-100">
                        <img src="/assets/images/image.png" alt="" width="30px" height="30px" loading="lazy">
                        <span>Photos/Vidéos</span>
                    </button>
                    <div class="collapse" id="collapsePicture">
                        <div class="card card-body shadow-sm p-3 bg-white rounded">
                            <form action="functions/upload.php" method="post" name="first_form"
                                  enctype="multipart/form-data">
                                <label for="file">Télécharger votre image</label>
                                <input class="input_media" type="file" name="file"/>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-postsubmit mt-3">Mettre à jour</button>
            </div>
        </form>
    </div>
</div>
<script src="/assets/js/app.js"></script>



