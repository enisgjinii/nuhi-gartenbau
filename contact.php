<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <title>NUHI-GARTENBAU - Kontakt</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="keywords" content="Gartenbau, Landschaftsbau, Kontakt, Gartenpflege, Beratung" />
  <meta name="description" content="Kontaktieren Sie uns für professionelle Gartenbau-Dienstleistungen. Wir sind für Sie da!" />
  <!-- Favicon -->
  <link href="assets/icons8-leaf-96.png" rel="icon" />
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
</head>
<body>
  <?php include 'partials/spinner.php'; ?>
  <?php include 'partials/toopbar.php'; ?>
  <?php include 'partials/navbar.php'; ?>
  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
      <h1 class="display-4 text-white animated slideInDown mb-4">Kontaktieren Sie uns</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item">
            <a class="text-white" href="index.php">Startseite</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Seiten</a>
          </li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Kontakt</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <!-- Contact Details -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <h3 class="mb-4">Kontaktinformationen</h3>
          <p class="mb-4">Unser Team steht Ihnen für alle Fragen und Anliegen zur Verfügung. Kontaktieren Sie uns gerne über die folgenden Wege:</p>
          <div class="d-flex align-items-start mb-4">
            <i class="fa fa-map-marker-alt text-primary fs-1 me-3"></i>
            <div>
              <h5 class="mb-2">Unsere Adresse</h5>
              <p class="mb-0">Bergstraße 123, 12345 Musterstadt, Deutschland</p>
            </div>
          </div>
          <div class="d-flex align-items-start mb-4">
            <i class="fa fa-envelope-open text-primary fs-1 me-3"></i>
            <div>
              <h5 class="mb-2">E-Mail Adresse</h5>
              <p class="mb-0">info@nuhi-gartenbau.de</p>
            </div>
          </div>
          <div class="d-flex align-items-start mb-4">
            <i class="fa fa-phone-alt text-primary fs-1 me-3"></i>
            <div>
              <h5 class="mb-2">Telefonnummer</h5>
              <p class="mb-0">+49 170 3896766</p>
            </div>
          </div>
          <div class="d-flex align-items-start">
            <i class="fa fa-clock text-primary fs-1 me-3"></i>
            <div>
              <h5 class="mb-2">Öffnungszeiten</h5>
              <p class="mb-0">Montag - Freitag: 08:00 - 18:00</p>
              <p class="mb-0">Samstag: 09:00 - 15:00</p>
            </div>
          </div>
        </div>
        <!-- Contact Form -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-body text-uppercase mb-2">Kontaktieren Sie uns</h6>
            <h1 class="display-6 mb-0">Haben Sie Fragen? Kontaktieren Sie uns!</h1>
          </div>
          <form id="contactForm">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control border-0 bg-light" name="name" id="name" placeholder="Ihr Name" required />
                  <label for="name">Ihr Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control border-0 bg-light" name="email" id="email" placeholder="Ihre E-Mail" required />
                  <label for="email">Ihre E-Mail</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control border-0 bg-light" name="subject" id="subject" placeholder="Betreff" required />
                  <label for="subject">Betreff</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control border-0 bg-light" name="message" placeholder="Nachricht hinterlassen" id="message" style="height: 150px" required></textarea>
                  <label for="message">Nachricht</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary py-3 px-5" type="submit">Nachricht senden</button>
              </div>
            </div>
          </form>
        </div>
        <!-- Google Map -->
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px">
          <div class="position-relative h-100">
            <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="min-height: 450px; border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->
  <?php include 'partials/footer.php'; ?>
  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Contact Form Handling -->
  <script>
    $(document).ready(function() {
      $("#contactForm").on("submit", function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
          type: "POST",
          url: "contact_form_handler.php",
          data: formData,
          success: function(response) {
            Swal.fire({
              icon: 'success',
              title: 'Nachricht gesendet!',
              text: 'Vielen Dank für Ihre Nachricht. Wir werden uns in Kürze bei Ihnen melden.',
              confirmButtonColor: '#3085d6'
            });
            $("#contactForm")[0].reset();
          },
          error: function() {
            Swal.fire({
              icon: 'error',
              title: 'Fehler!',
              text: 'Beim Senden Ihrer Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.',
              confirmButtonColor: '#d33'
            });
          }
        });
      });
    });
  </script>
  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>
</html>