<?php
require_once '../template-parts/layout/head.php';
require_once '../functions/users.php';

middleware('auth');

$users = getUsers();
$page = ['title' => 'Liste des utilisateurs'];

require_once '../template-parts/layout/header.php'; ?>

    <main id="main">

        <table class="table table-hover table-bordered">

            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
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
                    <td><?php echo $user['created_at']; ?></td>
                    <td><a type="button" id="button" href="edit.php?id=<?php echo $user['id'];?>">Modifier</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>

    </main>

<?php require_once '../template-parts/layout/footer.php'; ?>