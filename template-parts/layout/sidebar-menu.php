<?php require_once 'functions/users.php';

$auth = getAuth();
?>

<nav id="sidebar">

    <ul class="list-group">
        <li class="list-group-item">
            <a href="/">
                <div class="link-wrapper">
                    <span>Accueil</span>
                </div>
            </a>
        </li>
        <li class="list-group-item">
            <a href="/explorer">
                <div class="link-wrapper">
                    <span>Explorer</span>
                </div>
            </a>
        </li>
        <li class="list-group-item">
            <a href="/notifications">
                <div class="link-wrapper">
                    <span>Notifications</span>
                </div>
            </a>
        </li>
        <li class="list-group-item">
            <a href="/messages">
                <div class="link-wrapper">
                    <span>Messages</span>
                </div>
            </a>
        </li>
        <li class="list-group-item">
            <a href="account.php">
                <div class="link-wrapper">
                    <span>Profil</span>
                </div>
            </a>
        </li>
        <?php if ($auth): ?>
            <li class="nav-item list-group-item">
                <a class="nav-link"
                   href="/users/show.php"><?php echo $auth['username']; ?></a>
            </li>
            <?php if (isAdmin($auth)): ?>
                <li class="nav-item list-group-item">
                    <a class="nav-link" href="../admin">Admin</a>
                </li>
            <?php endif; ?>
            <li class="nav-item list-group-item">
                <a href="#" class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="../../api/auth/logout.php" method="POST"
                      style="display: none">
                    <button type="submit" class="nav-link">Submit</button>
                </form>
            </li>
        <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="/register.php">Inscription</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/login.php">Connexion</a>
            </li>
        <?php endif; ?>
    </ul>

