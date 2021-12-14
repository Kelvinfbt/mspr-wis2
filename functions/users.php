<?php

require_once 'helpers.php';
require_once 'database.php';


function getAuth()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $id = getValue($_SESSION['auth_id']) ? $_SESSION['auth_id'] : 0;

    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users WHERE id = :id LIMIT 1');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUser($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users WHERE id = :id LIMIT 1');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUserByEmail($email)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUserByEmailAndPassword($email, $password)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users WHERE email = :email AND password = :password LIMIT 1');
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUsers()
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function storeUser($data)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
    $stmt->bindParam(':username', $data['username']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':password', $data['password']);
    $stmt->execute();

    return $dbh->lastInsertId();
}

function updateUser($id, $data)
{

}

function delete($id)
{

}


function getUserPosts($id)
{
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM posts WHERE user_id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

