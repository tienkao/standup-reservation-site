<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
            <a href="#" class="navbar-brand">
            <h1 class="text-light">100 Laugh</h1></a>
            <a href="#" class="nav-link text-light">Welcome <?= $_SESSION['username'] ?>!</a></li>

        <button class="navbar-toggler" type ="button" data-bs-toggle ="collapse" data-bs-target ="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="staff-dashboard.php" class="nav-link text-light" >Dashboard</a></li>
                <li class="nav-item">
                    <a href="register-shows-lists.php" class="nav-link text-light" >Register shows</a></li>
                <li class="nav-item">
                    <a href="homepage.php" class="nav-link text-light" >Log out</a></li>
                
            </ul>
        </div>
    </div>
</nav>