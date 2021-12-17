<?php
require $_SERVER['DOCUMENT_ROOT'] . '/functions/post.php';

$post = getPost($_GET['id']);

$page = ['title' => "Modifier l'article"];

$author = getPostAuthor($post);
$_POST['body'] = $post['body'];
$page = [
    'body' => $post['body'],
    'media' => $post['media'],
];

?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/template-parts/layout/header.php'; ?>

    <main>

        <section>
            <form action="/api/posts/delete.php?id=<?php echo $post['id']; ?>" method="POST" class="mt-2 float-end">
                <button type="submit" class="me-5 btn btn-outline-danger">Supprimer</button>
            </form>

            <form style="" class="form-update mt-5" id="post_form" method="POST"
                  action="/api/posts/update.php?id=<?php echo $post['id']; ?>">

                <h1 class="h1 mb-5 text-center">Modifier le post</h1>

                <div style=" max-width: 700px" class="form-group mb-3">
                        <textarea name="body" class="text-post form-control" placeholder="Ajouter un nouveau post"
                                  id="body"><?php echo $_POST['body']; ?>
                        </textarea>
                </div>

                <div id="choose" class="row g-2">

                    <div class="col-lg-6">
                        <label for="media"></label>
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#collapsePicture"
                                class="btn w-100 btn-outline-primary">
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
                    <div class="col-lg-6">
                        <button type="submit" class="btn1 btn-outline-primary mt-4 w-100 btn">Mettre à jour</button>
                    </div>
                </div>
            </form>



        </section>

    </main>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/template-parts/layout/footer.php'; ?>