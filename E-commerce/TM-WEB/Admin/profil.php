<?php
// Include the database configuration file
require_once ('configAdmins.php');

// Fetch admin information from the database
$query = "SELECT * FROM data_admin";
$result = mysqli_query($connection, $query);

// Check if any admin entries exist
if (mysqli_num_rows($result) > 0) {
    // Fetch the first admin entry (assuming there's only one admin)
    $row = mysqli_fetch_assoc($result);

    // Retrieve the admin information
    $adminName = $row['nama'];
    $adminEmail = $row['email'];
} else {
    $adminName = "No admin entries found";
    $adminEmail = "";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Poormens</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <div class="resume-section-content">
        <h2 class="mb-3 mt-3">
          POOR MEN'S
          <span class="text-light">CLOTHING</span>
        </h2>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-left" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php"><i class="fa-solid fa-border-all"></i> Semua Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="input.html"><i class="fa-solid fa-pen-to-square"></i> Input Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="profil.php"><i class="fa-solid fa-user"></i> Profil Admin</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
    <section class="resume-section" id="about">
      <div class="resume-section-content">
        <h4 class="mb-3">Profil Admin</h4>
        <div class="subheading mb-5">Klik Edit Untuk Mengubah Informasi</div>
        <div class="row mb-3 mt-3">
          <label class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <span class="form-control-static"><?php echo $adminName; ?></span>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">E-Mail</label>
          <div class="col-sm-10">
            <span class="form-control-static"><?php echo $adminEmail; ?></span>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-10 offset-sm-2">
            <a class="btn btn-primary btn-xl text-uppercase text-white fw-bold" href="editprofil.php">Edit</a>
          </div>
        </div>
      </div>
    </section>
  </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
