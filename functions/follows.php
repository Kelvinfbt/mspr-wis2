<?php

require_once 'helpers.php';
require_once 'database.php';
require_once 'users.php';

/**
 * On ajoute un article à la BDD
 *
 * @param $data
 * @return string (post ID)
 */

function follow($data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('INSERT INTO follows (user_id, follow_id) VALUES (:user_id, :follow_id)');
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':follow_id', $data['follow_id']);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * @param $data
 * @return bool
 */

function unfollow($data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('DELETE FROM follows WHERE user_id = :user_id AND follow_id = :follow_id LIMIT 1');
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':follow_id', $data['follow_id']);
    $stmt->execute();

    return true;
}

function getFollow($data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM follows WHERE user_id = :user_id AND follow_id = :follow_id');
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':follow_id', $data['follow_id']);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function toggleFollow($data)
{
    if (getFollow($data)) {
        return unfollow($data);
    } else {
        return follow($data);
    }
}



