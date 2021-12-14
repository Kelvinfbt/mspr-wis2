<?php

require_once 'database.php';

/**
 * Récupère tous les articles
 *
 * @return array
 */
function getPosts()
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM posts');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * On ajoute un post à la BDD
 *
 * @param $data
 * @return string (post ID)
 */
function storePost($data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('INSERT INTO posts (title, body, media, user_id) VALUES (:title, :body, :media, :user_id)');
    $stmt->bindParam(':title', $data['title']);
    $stmt->bindParam(':body', $data['body']);
    $stmt->bindParam(':media', $data['media']);
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->execute();

    return $dbh->lastInsertId();
}

/**
 * Récupère un post depuis son ID
 *
 * @param $id
 * @return mixed
 */
function getPost($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM posts WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


/**
 * Mettre à jour un post
 *
 * @param $id
 * @param $data
 * @return mixed
 */
function updatePost($id, $data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('UPDATE posts SET title = :title, media = :media, body = :body, updated_at = NOW() WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':title', $data['title']);
    $stmt->bindParam(':media', $data['media']);
    $stmt->bindParam(':body', $data['body']);
    $stmt->execute();

    return $id;
}


/**
 * Supprime un post
 *
 * @param $id
 * @return bool
 */
function deletePost($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('UPDATE posts SET deleted_at = NOW() WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $id;
}



/**
 * Supprime définitivement un post
 *
 * @param $id
 * @return bool
 */
function destroyPost($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('DELETE FROM posts WHERE id = :id LIMIT 1');
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}


function getPostAuthor($post)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users WHERE id = :user_id LIMIT 1');
    $stmt->bindParam(':user_id', $post['user_id']);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}






