<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/helpers.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/users.php';

middleware('auth');

$users = getUsers();
$page = ['title' => 'Liste des utilisateurs'];

require $_SERVER['DOCUMENT_ROOT'] . '/template-parts/layout/header.php'; ?>

    <main id="main">

        <table class="table table-hover table-bordered">

            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Date d'inscription</th>
                <th>Modifier</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo isAdmin($user) ? 'Oui' : 'Non'; ?></td>
                    <td><?php echo $user['created_at']; ?></td>
                    <td><a type="button" id="button" href="edit.php?id=<?php echo $user['id'];?>">Modifier</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>

    </main>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/template-parts/layout/footer.php'; ?>