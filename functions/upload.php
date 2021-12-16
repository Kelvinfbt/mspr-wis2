<?php

require_once 'functions/database.php';


if (isset($_FILES['file'])) {
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
}

$tmpName = $_FILES['file']['tmp_name'];
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$error = $_FILES['file']['error'];

move_uploaded_file($tmpName, './upload/' . $name);

function storeMedia($data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('INSERT INTO posts (body, media, user_id) VALUES (:body, :media, :user_id)');
    $stmt->bindParam(':body', $data['body']);
    $stmt->bindParam(':media', $data['media']);
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->execute();

    return $dbh->lastInsertId();
}