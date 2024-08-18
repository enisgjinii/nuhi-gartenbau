<?php
// Define services array
$services = [
  [
    'title' => 'Gartenbau',
    'description' => 'Verwandeln Sie Ihren Außenbereich mit unseren professionellen Gartenbau-Dienstleistungen. Wir schaffen atemberaubende Landschaften, die Ihre Vision zum Leben erwecken.',
    'image' => 'assets/30.jpg'
  ],
  [
    'title' => 'Gartenpflege',
    'description' => 'Halten Sie Ihren Garten üppig und lebendig mit unseren umfassenden Pflegediensten. Wir kümmern uns um alles, von Beschneidung bis Düngung.',
    'image' => 'assets/31.jpg'
  ],
  [
    'title' => 'Landschaftsgestaltung und Design',
    'description' => 'Verschönern Sie Ihren Garten mit unseren maßgeschneiderten Landschaftsgestaltungs- und Designleistungen. Von eleganten Gartenlayouts bis hin zu atemberaubenden Blumenarrangements.',
    'image' => 'assets/32.jpg'
  ],
  [
    'title' => 'Bewässerungssysteme',
    'description' => 'Sorgen Sie dafür, dass Ihr Garten gedeiht, mit unseren effizienten Bewässerungssystemen. Wir entwerfen und installieren Lösungen, die Ihre Pflanzen hydratisiert und gesund halten.',
    'image' => 'assets/33.jpg'
  ],
  [
    'title' => 'Gartenbeleuchtung',
    'description' => 'Beleuchten Sie Ihren Garten mit unseren kreativen Beleuchtungslösungen. Von subtilen Strahlern bis hin zu dekorativen Elementen, wir verbessern die Atmosphäre Ihres Gartens.',
    'image' => 'assets/34.jpg'
  ],
  [
    'title' => 'Gartenrenovierung',
    'description' => 'Bringen Sie frischen Wind in Ihren Garten mit unseren Renovierungsleistungen. Wir erneuern müde Landschaften und hauchen Ihren Außenbereichen neues Leben ein.',
    'image' => 'assets/35.jpg'
  ],
  [
    'title' => 'Zaunbau',
    'description' => 'Sichern und verschönern Sie Ihr Zuhause mit unserem maßgeschneiderten Zaunbau-Service.',
    'image' => 'assets/40.jpeg'
  ],
  [
    'title' => 'Pflaster-und Natursteinarbeiten',
    'description' => 'Gestalten Sie elegante Außenbereiche mit unseren Pflaster- und Natursteinarbeiten.',
    'image' => 'assets/41.jpeg'
  ],
  [
    'title' => 'Pflaster-und Natursteinarbeiten',
    'description' => 'Schützen und verschönern Sie Ihren Garten mit professionellen Pflaster- und Natursteinarbeiten.',
    'image' => 'assets/42.jpeg'
  ]
];
// Define form fields
$formFields = [
  ['type' => 'text', 'name' => 'name', 'label' => 'Ihr Name'],
  ['type' => 'email', 'name' => 'email', 'label' => 'Ihre E-Mail'],
  ['type' => 'tel', 'name' => 'phone', 'label' => 'Ihre Telefonnummer'],
  ['type' => 'text', 'name' => 'service', 'label' => 'Dienstleistungsart'],
  ['type' => 'textarea', 'name' => 'message', 'label' => 'Nachricht']
];
?>
<!DOCTYPE html>
<html lang="de">

<head>

  <meta charset="utf-8" />
  <title>Nuhi Gartenbau - Unsere Dienstleistungen</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Garten, Landschaftsgestaltung, Bau, Renovierung" name="keywords" />
  <meta content="Experte für Garten- und Landschaftsbau, von Bau über Pflege bis zur Renovierung." name="description" />
  <!-- Favicon -->
  <link type="image/png" sizes="96x96" rel="icon" href="assets/icons8-leaf-96.png">
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
  <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
      c[a] = c[a] || function() {
        (c[a].q = c[a].q || []).push(arguments)
      };
      t = l.createElement(r);
      t.async = 1;
      t.src = "https://www.clarity.ms/tag/" + i;
      y = l.getElementsByTagName(r)[0];
      y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "nmbdj7zl0r");
  </script>
  <script src="tawk.js"></script>
</head>

<body>
  <?php //include 'partials/spinner.php'; ?>
  <?php include 'partials/toopbar.php'; ?>
  <?php include 'partials/navbar.php'; ?>
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
      <h1 class="display-4 text-white animated slideInDown mb-4">
        Unsere Gartendienstleistungen
      </h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="#">Seiten</a></li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Gartendienstleistungen</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            <h6 class="text-body text-uppercase mb-2">Unsere Gartendienstleistungen</h6>
            <h1 class="display-6 mb-0">
              Wunderschöne Gartenlösungen für jeden Bedarf
            </h1>
          </div>
        </div>
        <!-- <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
          <a class="btn btn-primary py-3 px-5" href="">Mehr erfahren</a>
        </div> -->
      </div>
      <div class="row g-4 justify-content-center">
        <?php foreach ($services as $index => $service): ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= 0.1 + ($index * 0.2) ?>s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="<?= $service['image'] ?>" alt="<?= $service['title'] ?>" style="width: 100%; height: 300px; object-fit: cover;" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3"><?= $service['title'] ?></h5>
                <p><?= $service['description'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <!-- Service End -->
  <!-- Appointment Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-body text-uppercase mb-2">Termin vereinbaren</h6>
            <h1 class="display-6 mb-0">
              Lassen Sie uns Ihren Garten gemeinsam umgestalten
            </h1>
          </div>
          <p class="mb-0">
            Kontaktieren Sie uns noch heute, um über Ihre Gartenbedürfnisse zu sprechen. Egal ob neues Projekt oder Pflege, unser Team hilft Ihnen, Ihren Traumgarten zu verwirklichen.
          </p>
        </div>
        <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <form id="appointmentForm" method="post" action="process_appointment.php">
            <div class="row g-3">
              <?php foreach ($formFields as $field): ?>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <?php if ($field['type'] === 'textarea'): ?>
                      <textarea class="form-control bg-light border-0" id="<?= $field['name'] ?>" name="<?= $field['name'] ?>" placeholder="<?= $field['label'] ?>" style="height: 100px"></textarea>
                    <?php else: ?>
                      <input type="<?= $field['type'] ?>" class="form-control bg-light border-0" id="<?= $field['name'] ?>" name="<?= $field['name'] ?>" placeholder="<?= $field['label'] ?>" required>
                    <?php endif; ?>
                    <label for="<?= $field['name'] ?>"><?= $field['label'] ?></label>
                  </div>
                </div>
              <?php endforeach; ?>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Termin vereinbaren</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Appointment End -->
  <?php include('partials/footer.php'); ?>
  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function() {
      $('#appointmentForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
          type: 'POST',
          url: 'process_appointment.php',
          data: $(this).serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.status === 'success') {
              Swal.fire({
                icon: 'success',
                title: 'Erfolg!',
                text: response.message,
              }).then((result) => {
                if (result.isConfirmed) {
                  $('#appointmentForm')[0].reset();
                }
              });
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Fehler',
                text: response.message,
              });
            }
          },
          error: function() {
            Swal.fire({
              icon: 'error',
              title: 'Fehler',
              text: 'Es gab einen Fehler bei der Terminvereinbarung. Bitte versuchen Sie es später erneut.',
            });
          }
        });
      });
    });
  </script>
</body>

</html>