<?php

require_once '../functions/database.php';


$uploaddir = '/uploads';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est téléchargé";
} else {
    echo "Le fichier n'est pas téléchargé";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);

echo '</pre>';







// Déplacer le fichier
move_uploaded_file($uploadfile, $uploaddir);