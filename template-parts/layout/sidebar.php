<?php require 'template-parts/layout/head.php';
require_once './functions/helpers.php';
require_once './functions/database.php';
require_once './functions/users.php';

middleware('auth');
$auth = getAuth();
?>

<aside class="shadow-lg p-3 mb-5 rounded" id="sidebar" style="height: 100vh; background-color: #86CCB0; margin-top: 0; margin-bottom: 0;">
    <nav>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="index.php">
                <div class="w-25" id="welcome"></div>
                </a>
            </li>
            <li class="nav_sidebar nav-item">
                <a class="nav-link" href="index.php">
                    Fil D'actualités
                </a>
            </li>
            <li class="nav_sidebar nav-item">
                <a class="nav-link" href="account.php">
                    Mes publications
                </a>
            </li>
            <li class="nav_sidebar nav-item">
                <a class="nav-link" href="#">
                    Liste des utilisateurs
                </a>
            </li>

            <li class="nav_sidebar nav-item">
                <a class="nav-link" href="mentions-legales.php">
                    Mentions légales
                </a>
            </li>
            <?php if ($auth): ?>
                <li class="nav_sidebar nav-item">
                    <a class="nav-link"
                       href="account.php"><?php echo $auth['username']; ?></a>
                </li>
                <?php if (isAdmin($auth)): ?>
                    <li class="nav_sidebar nav-item">
                        <a class="nav-link" href="admin">Admin</a>
                    </li>
                <?php endif; ?>
                <li class="nav_sidebar nav-item">
                    <a href="#" class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="api/auth/logout.php" method="POST"
                          style="display: none">
                        <button type="submit" class="nav-link">Submit</button>
                    </form>
                </li>
            <?php else: ?>
                <li class="nav_sidebar nav-item">
                    <a class="nav-link" href="register.php">Inscription</a>
                </li>

                <li class="nav_sidebar nav-item">
                    <a class="nav-link" href="login.php">Connexion</a>
                </li>
            <?php endif; ?>

        </ul>
    </nav>
</aside>
