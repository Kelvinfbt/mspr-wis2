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

<form id="post_form" class="form pt-4" method="POST" action="/api/posts/update.php?id=<?php echo $post['id']; ?>">
    <h1 class="h1 text-center">Hello, quoi de neuf ?</h1>
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
                    <form action="functions/upload.php" method="post" name="first_form" enctype="multipart/form-data">
                        <label for="file">Télécharger votre image</label>
                        <input class="input_media" type="file" name="file"/>
                    </form>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-postsubmit mt-3">Mettre à jour</button>
    </div>

</form>
<script src="/assets/js/app.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function () {
        // On cherche le bouton
        let button = document.getElementById('trigger');
        // On vérifie que le bouton est sur la page
        if (button) {
            // On écoute pour un clic sur le bouton
            button.addEventListener('click', function () {
                let card = document.getElementById('choose');
                if (card) {
                    card.classList.toggle('visually-hidden');
                }
            });
        } else {
            console.log('Pas de bouton sur la page');
        }
    });
    /*
    document.addEventListener('DOMContentLoaded', function () {
        // Obtenir l'entrée
        function getUserInput() {
            let inputValue = document
                .querySelector(".js-userinput").value;
            return inputValue;
        }

        // Obtenir l'entrée et retourner la valeur
        document.querySelector(".js-go").addEventListener("click", function () {
            let inputValue = document
                .querySelector(".js-userinput").value;
            let userInput = getUserInput();
            searchGiphy(userInput);
        });

        document.querySelector(".js-userinput")
            .addEventListener("keyup", function (e) {

                if (e.which === 13) {
                    let userInput = getUserInput();
                    searchGiphy(userInput);
                }
            });

        //Charger les images sans actualiser la page et se connecter à l'API
        function searchGiphy(searchQuery) {
            let url =
                "https://api.giphy.com/v1/gifs/search?api_key=dc6zaTOxFJmzC&q="
                + searchQuery;

            // AJAX Request

            let GiphyAJAXCall = new XMLHttpRequest();
            GiphyAJAXCall.open("GET", url);
            GiphyAJAXCall.send();

            GiphyAJAXCall.addEventListener("load", function (data) {
                let actualData = data.target.response;
                pushToDOM(actualData);
                console.log(actualData);

            });
        }


        function pushToDOM(response) {

            response = JSON.parse(response);

            let images = response.data;

            let container = document.querySelector(".js-container");

            container.innerHTML = "";

            images.forEach(function (image) {

                let src = image.images.fixed_height.url;

                container.innerHTML += "<img src='"
                    + src + "' class='container-image' />";
            });
        }
    });
*/

</script>


