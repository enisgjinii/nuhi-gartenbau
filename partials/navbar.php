<?php
// Define the menu items
$menu_items = [
    'index.php' => 'Startseite',
    'about.php' => 'Über uns',
    'service.php' => 'Unsere Leistungen',
    'team.php' => 'Unser Team',
    'contact.php' => 'Kontaktiere uns'
];

// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
           NUHI-GARTENBAU
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
            <?php foreach ($menu_items as $url => $title) : ?>
                <a href="<?php echo $url; ?>" class="nav-item nav-link <?php echo ($current_page === $url) ? 'active' : ''; ?>">
                    <?php echo $title; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>
<!-- Navbar End -->