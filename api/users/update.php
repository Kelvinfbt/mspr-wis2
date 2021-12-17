<?php
require_once '../../functions/helpers.php';

middleware('auth');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$about = $_POST['about'];
$sport = $_POST['sport'];
$lieu = $_POST['lieu'];
$niveau = $_POST['niveau'];
$salle = $_POST['salle'];
$id = $_GET['id'];

$connexion = new PDO('mysql:host=localhost:8889;dbname=msprwis2', 'root', 'root');

$query = $connexion->prepare("UPDATE users SET username = :username, email = :email, password = :password WHERE id = :id");

$stmt = $connexion->prepare('INSERT INTO users (about, sport, lieu, niveau, salle) VALUES (:about, :sport, :lieu, :niveau, :salle)');
$stmt->bindParam(':about', $data['about']);
$stmt->bindParam(':sport', $data['sport']);
$stmt->bindParam(':lieu', $data['lieu']);
$stmt->bindParam(':niveau', $data['niveau']);
$stmt->bindParam(':salle', $data['salle']);
$stmt->execute();

$values = [
    'username' => $username,
    'email' => $email,
    'password' => $password,
    'about' => $about,
    'sport' => $sport,
    'lieu' => $lieu,
    'niveau' => $niveau,
    'salle' => $salle,
    'id' => $id,
];

$query->execute($values);

header('Location:../../account.php');

?>