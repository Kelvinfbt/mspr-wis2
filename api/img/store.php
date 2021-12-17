<?php

require $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';
require $_SERVER['DOCUMENT_ROOT'] . '/functions/database.php';

$dbh = connectDB();

middleware('auth');

$name = $_FILES['fichier']['nom'];
$dbname = 'social-network';
$target_dir = "upload/";
$target_file = $target_dir . $dbname($_FILES["fichier"]["nom"]);

// Sélectionnez le type de fichier
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Extensions de fichiers valides
$extensions_arr = array("jpg", "jpeg", "png", "gif");

// Vérifier l'extension
if (in_array($imageFileType, $extensions_arr)) {
    // Téléverser un fichier
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
        // Insérer un enregistrement
        $query = "insérer dans les images(nom) values('" . $name . "')";
        mysqli_query($dbh, $query);
    }
}
?>

