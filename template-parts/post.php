<form id="post_form" class="form" method="post" action="api/posts/store.php">

    <div class="form-group mb-3">
        <label for="body"></label>
        <textarea name="body" class="form-control" placeholder="Ajouter un nouveau post" id="body"></textarea>
    </div>


    <div class="row g-1">

        <div class="col-md-6">
            <label for="media"></label>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapsePicture"
                    class="btn btn-outline-secondary w-100">
                <img src="/assets/images/image.png" alt="" width="30px" height="30px" loading="lazy">
                <span>Photos/Vidéos</span>
            </button>
            <div class="collapse" id="collapsePicture">
                <div class="card card-body">
                    <form action="functions/upload.php" method="post" name="first_form" enctype="multipart/form-data">
                        <label for="file">Télécharger votre image</label>
                        <input class="input_media" type="file" name="userfile"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseTag" aria-expanded="false"
                    aria-controls="collapseTag" class="btn btn-outline-secondary w-100">
                <img alt="" src="/assets/images/tag.png" width="30px" height="30px" loading="lazy">
                <span>Tagger un ami</span>
            </button>
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
        </div>

        <div class="col-md-6">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapsemotivation"
                    aria-expanded="false"
                    aria-controls="collapsemotivation" class="btn btn-outline-secondary w-100">
                <img alt="" src="/assets/images/motivation.png" width="30px" height="30px" loading="lazy">
                <span>Votre motivation</span>
            </button>
        </div>
        <div class="collapse" id="collapsemotivation">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                       value="option1">
                <label class="form-check-label" for="inlineRadio1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-emoji-expressionless" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm5 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                       value="option2">
                <label class="form-check-label" for="inlineRadio2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-emoji-neutral" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4 10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5zm3-4C7 5.672 6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8s1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5S9.448 8 10 8s1-.672 1-1.5z"/>
                    </svg>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                       value="option3">
                <label class="form-check-label" for="inlineRadio3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-emoji-smile" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                    </svg>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                       value="option4">
                <label class="form-check-label" for="inlineRadio4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-emoji-laughing" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
                    </svg>
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5"
                       value="option5">
                <label class="form-check-label" for="inlineRadio5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                        <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
                    </svg>
                </label>
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
                <div class="search">
                    <h3 class="h2">Gif Recherche</h3>
                </div>
                <div class="container container-padding50">
                    <input type="text" class="js-userinput container-textinput"/>
                    <button class="js-go container-button">
                        Recherche!
                    </button>
                </div>
                <div class="container js-container">
                </div>
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
        <button type="submit" class="btn btn-outline-primary mt-3">Publier</button>
    </div>

</form>


<script>

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