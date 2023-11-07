<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/font/flaticon.css" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo3.jpg" alt="logo" width="30" height="24" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav text-uppercase">
          <a class="nav-link <?php if ($section == "index") { echo "active"; } ?>" aria-current="page" href="index.php">Home</a>
          <a class="nav-link <?php if ($section == "services") { echo "active"; } ?>" href="services.php">Service</a>
          <a class="nav-link <?php if ($section == "booking_appointment") { echo "active"; } ?>" href="booking_appointment.php">Book An Appointment</a>
          <a class="nav-link <?php if ($section == "contact_us") { echo "active"; } ?>" href="contact_us.php">Contact Us</a>
          <a class="nav-link <?php if ($section == "about_us") { echo "active"; } ?>" href="about_us.php">About Us</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Section: Hero -->