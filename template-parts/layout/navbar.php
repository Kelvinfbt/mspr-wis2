<?php require_once 'functions/users.php';

$auth = getAuth();
?>

<header id="header">
    <nav class="navbar shadow-sm navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/crud/">BodyUp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Messages</a>
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
            </div>
        </div>
    </nav>
</header>