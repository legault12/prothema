<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prothema Account</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/account.css" rel="stylesheet">
</head>

<body>
  <?php
  // Start session
  session_start();
  
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/modules/universal/header.php";
  include_once($path);
  
  // include the database connection file
  include_once '../modules/universal/db_connection.php';

  // check if user_id is set in session
  if (!isset($_SESSION['user_id'])) {
      echo 'User ID not set in session';
      exit;
  }

  // Get the user's ID from the session
  $userId = $_SESSION['user_id'];

  // Prepare and execute the SQL statement
  $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
  $stmt->bindParam(':id', $userId);
  $stmt->execute();

  // check if a user was found
  if($stmt->rowCount() > 0) {
      // Get the user
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
      echo 'No user found with the given ID';
      exit;
  }
  ?>

  <main id="main">
    <div class="account-container">
      <h2>User Information</h2>
      <p>Username: <?php echo htmlspecialchars($user['username']); ?></p>
      <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
      <p>First Name: <?php echo htmlspecialchars($user['first_name']); ?></p>
      <p>Last Name: <?php echo htmlspecialchars($user['last_name']); ?></p>
    </div>
  </main>

  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "modules/universal/footer.php";
  include_once($path);
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>