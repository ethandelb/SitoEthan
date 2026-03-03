<nav class="navbar">
    <a class="navbar-brand" href="index.php">Ethan Del Biaggio</a>
    
    <button class="navbar-toggler" id="mobile-menu-btn">
        ☰
    </button>

    <ul class="navbar-nav" id="nav-menu">
        <li><a class="nav-link" href="#hero">Home</a></li>
        <li><a class="nav-link" href="#servizi">servizi</a></li>
        <li><a class="nav-link" href="#about">Chi sono</a></li>
        <li><a class="nav-link" href="#contatti">Contatti</a></li>
        <?php if (isset($_SESSION['username'])) : ?>
            <li><a href="actions/closeSession.php" class="btn-secondary">Logout</a></li>
        <?php endif; ?>
    </ul>
</nav>


			