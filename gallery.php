<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Nuhi Gartenbau - Galerie</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <link href="assets/icons8-leaf-96.png" rel="icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
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
      <h1 class="display-4 text-white animated slideInDown mb-4">Galerie</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a class="text-white" href="#">Startseite</a></li>
          <li class="breadcrumb-item"><a class="text-white" href="#">Seiten</a></li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Galerie</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Gallery Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <?php
        // Load and parse the JSON file
        $jsonFilePath = 'garden_analysis_results.json';
        $jsonData = json_decode(file_get_contents($jsonFilePath), true);

        function getGardenData($imageFilename, $jsonData)
        {
          // Loop through the JSON data to find the corresponding image data
          foreach ($jsonData as $gardenData) {
            if ($gardenData['image'] === $imageFilename) {
              return $gardenData;
            }
          }
          // Return a default value if no match is found
          return [
            'title' => 'Garten',
            'subtitle' => 'Ein wunderschöner Garten.',
          ];
        }

        for ($i = 1; $i <= 39; $i++):
          $imageFilename = "$i.jpg";
          $gardenData = getGardenData($imageFilename, $jsonData);
        ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="gallery-item position-relative">
              <img class="img-fluid" src="assets/<?php echo $imageFilename; ?>" alt="Galerie Bild <?php echo $i; ?>" style="width: 100%; height: 250px; object-fit: cover;" />
              <div class="gallery-text bg-white pt-3">
                <h5><?php echo $gardenData['title']; ?></h5>
                <span><?php echo $gardenData['subtitle']; ?></span>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
  <!-- Gallery End -->
  <?php include 'partials/footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>