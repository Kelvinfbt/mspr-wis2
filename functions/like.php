<?php

require_once 'helpers.php';
require_once 'database.php';
require_once 'users.php';

/**
 * @param $data
 * @return string
 */


function like($data){
    $dbh = connectDB();
    $stmt = $dbh->prepare('INSERT INTO likes (post_id, user_id) VALUES (:post_id, :user_id)');
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':post_id', $data['post_id']);
    $stmt->execute();

    return $dbh->lastInsertId();
}

function getLikes($data){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM likes WHERE  post_id = :post_id AND user_id = :user_id LIMIT 1');
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':post_id', $data['post_id']);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);

}

function unlike($data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('DELETE FROM likes WHERE post_id = :post_id AND user_id = :user_id LIMIT 1');
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':post_id', $data['post_id']);
    $stmt->execute();

    return true;
}

function toggleLike($data)
{
    if (getLikes($data)) {
        return unlike($data);
    } else {
        return like($data);
    }

}