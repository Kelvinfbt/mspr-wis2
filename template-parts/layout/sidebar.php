<aside id="sidebar">
    <nav>
        <ul class="nav flex-column">
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
        </ul>
    </nav>
    <div class="logout">
        <a href="profile.php?id=<?php echo $_SESSION['id']?>" class="btn btn-warning">Voir le profil</a>
    </div>


</aside>
