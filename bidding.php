<?php /* bidding template */ ?>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prothema</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Resi
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/resi-free-bootstrap-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php include 'modules/universal/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center">
          <h1 class="fs-2 text-center">What type of vehicle(s) are you looking for?</h1>
          <form> 
          <div class="mt-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/truck.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Truck</h5>
                        <input class="form-check-input" type="checkbox" value="" id="phone-checkbox">
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/suv.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">SUV</h5>
                        <input class="form-check-input" type="checkbox" value="" id="phone-checkbox">
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/van.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Van</h5>
                        <input class="form-check-input" type="checkbox" value="" id="phone-checkbox">
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/assets/img/car.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Car</h5>
                        <input class="form-check-input" type="checkbox" value="" id="phone-checkbox">
                    </div>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

</body>
</html>