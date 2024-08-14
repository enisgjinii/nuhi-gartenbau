<!-- Footer Start -->
<?php include 'visitor_count.php'; ?>
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="text-white mb-4">Nuhi Gartenbau</h1>
                <p>Qualität und Kompetenz in Garten- und Landschaftsbau seit über 20 Jahren.</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-primary me-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-primary me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-primary me-1" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Adresse</h4>
                <p><i class="fa fa-map-marker-alt me-3"></i>Bergstraße 123, 12345 Musterstadt, Deutschland</p>
                <p><i class="fa fa-phone-alt me-3"></i>+49 170 3896766</p>
                <p><i class="fa fa-envelope me-3"></i>nuhi@nuhi-gartenbau.de</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Schnellzugriff</h4>
                <a class="btn btn-link" href="about.php">Über uns</a>
                <a class="btn btn-link" href="contact.php">Kontakt</a>
                <a class="btn btn-link" href="service.php">Unsere Leistungen</a>
                <a class="btn btn-link" href="gallery.php">Galerie</a>
            </div>
            <!-- Information -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Informationen</h4>
                <a class="btn btn-link" href="impressum.php">Impressum</a>
                <a class="btn btn-link" href="datenschutz.php">Datenschutz</a>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Nuhi Gartenbau</a>, Alle Rechte vorbehalten.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="text-light">Besucherzahl: <?php echo htmlspecialchars($current_count); ?></p>
                    Design von <a href="https://enisgjini.framer.website/">Enis Gjini</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->