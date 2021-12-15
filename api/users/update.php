<?php


$username = $_POST['username'];
$prenom = $_POST['first_name'];
$nom = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_GET['id'];

$connexion = new PDO('mysql:host=localhost:8889;dbname=msprwis2', 'root', 'root');

$query = $connexion->prepare("UPDATE users SET username = :username, first_name = :first_name, last_name = :last_name, email = :email, password = :password WHERE id = :id");


$values = [
    'username' => $username,
    'first_name' => $prenom,
    'last_name' => $nom,
    'email' => $email,
    'password' => $password,
    'id' => $id,
];

$query->execute($values);

header('Location:../../users/index.php');

?>