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
        <h4 class="mb-3">Edit Barang</h4>
        <div class="subheading mb-5">Edit Barang yang Telah Ada</div>
        <form method="POST" action="updateproduk.php">
          <?php
          // Include the database configuration file
          require_once 'configAdmins.php';

          // Get the product ID from the URL parameter
          $product_id = $_GET['product_id'];

          // Fetch the product entry from the database
          $query = "SELECT * FROM data_produk WHERE product_id = $product_id";
          $result = mysqli_query($connection, $query);

          // Check if the product exists
          if (mysqli_num_rows($result) > 0) {
            // Retrieve the product details
            $row = mysqli_fetch_assoc($result);
            $kode_barang = $row['product_id'];
            $nama_barang = $row['name'];
            $harga = $row['price'];
            $deskripsi = $row['description'];
            $gambar = $row['img_file_path'];

            // Display the form with pre-filled values
            echo '<div class="row mb-3 mt-3">';
            echo '<label for="kodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>';
            echo '<div class="col-sm-10">';
            echo '<input type="text" class="form-control" id="kodeBarang" name="kodeBarang" value="' . $kode_barang . '" readonly />';
            echo '</div>';
            echo '</div>';
            echo '<div class="row mb-3">';
            echo '<label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>';
            echo '<div class="col-sm-10">';
            echo '<input type="text" class="form-control" id="namaBarang" name="namaBarang" value="' . $nama_barang . '" required />';
            echo '</div>';
            echo '</div>';
            echo '<div class="row mb-3">';
            echo '<label for="harga" class="col-sm-2 col-form-label">Harga</label>';
            echo '<div class="col-sm-10">';
            echo '<input type="text" class="form-control" id="harga" name="harga" value="' . $harga . '" required />';
            echo '</div>';
            echo '</div>';
            echo '<div class="row mb-3">';
            echo '<label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>';
            echo '<div class="col-sm-10">';
            echo '<textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>' . $deskripsi . '</textarea>';
            echo '</div>';
            echo '</div>';
            echo '<div class="row mb-3">';
            echo '<label for="gambar" class="col-sm-2 col-form-label">Gambar</label>';
            echo '<div class="col-sm-10">';
            echo '<input type="text" class="form-control" id="gambar" name="gambar" value="' . $gambar . '" required />';
            echo '</div>';
            echo '</div>';
            echo '<div class="row mb-3">';
            echo '<div class="col-sm-10 offset-sm-2">';
            echo '<button type="submit" class="btn btn-primary btn-xl text-uppercase text-white fw-bold">Update</button>';
            echo '</div>';
            echo '</div>';
          } else {
            echo "<p>Product not found.</p>";
          }
          ?>
        </form>
      </div>
    </section>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
</html>
