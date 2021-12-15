<?php require_once 'functions/users.php';

$auth = getAuth();
?>

<aside id="sidebar">
    <nav>
        <ul class="nav flex-column">
            <li class="nav-item">
                <div class="w-25" id="welcome"></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Fil D'actualités
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Mes publications
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">
                    Liste des utilisateurs
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="mentions-legales.php">
                    Mentions légales
                </a>
            </li>
            <?php if ($auth): ?>
                <li class="nav-item">
                    <a class="nav-link"
                       href="users/show.php"><?php echo $auth['username']; ?></a>
                </li>
                <?php if (isAdmin($auth)): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin">Admin</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="#" class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="api/auth/logout.php" method="POST"
                          style="display: none">
                        <button type="submit" class="nav-link">Submit</button>
                    </form>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Inscription</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">Connexion</a>
                </li>
            <?php endif; ?>

        </ul>
    </nav>

    <div class="logout">
        <a href="profile.php?id=<?php echo $_SESSION['id']?>" class="btn">Voir le profil</a>
    </div>


</aside>
