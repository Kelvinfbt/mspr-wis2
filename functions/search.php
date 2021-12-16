<? /*php require_once '../template-parts/layout/head.php'; ?>
<?php require_once 'database.php'; ?>
<?php require_once 'helpers.php'; ?>

<?php

/**
* @param $data
* @return string
*/

/*
function getSearch($data){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username LIKE '%$requete% ');
    $stmt->bindParam(':username', $data['username']);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);

}





