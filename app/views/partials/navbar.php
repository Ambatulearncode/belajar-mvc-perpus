<nav class="navbar">
    <div class="container navbar-container">
        <a href="index.php?action=index" class="navbar-brand">
            <i class="bi bi-book-half"></i>
            <span>Pustaka<span class="text-primary">MVC</span></span>
        </a>

        <button class="navbar-toggle" id="navbarToggle">
            <i class="bi bi-list"></i>
        </button>

        <div class="navbar-menu" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php?action=index"
                        class="nav-link <?= ($_GET['action'] ?? 'index') == 'index' ? 'active' : '' ?>">
                        <i class="bi bi-grid"></i>
                        <span>Daftar Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?action=create"
                        class="nav-link <?= ($_GET['action'] ?? '') == 'create' ? 'active' : '' ?>">
                        <i class="bi bi-plus-circle"></i>
                        <span>Tambah Buku</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>