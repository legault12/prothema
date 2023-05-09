<?php include 'modules/variables/var-home.php'; ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.php"><?= $logo ?></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero"><?= $menu_item1 ?></a></li>
        <li><a class="nav-link scrollto" href="#about"><?= $menu_item2 ?></a></li>
        <li><a class="nav-link scrollto" href="#contact"><?= $menu_item3 ?></a></li>
        <li><a class="getstarted scrollto" href="#"><?= $menu_item4 ?></a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
