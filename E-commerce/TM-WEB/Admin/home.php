<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Poor Men's</title>
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
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php"><i class="fa-solid fa-sign-out"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
      <section class="resume-section" id="about">
        <div class="resume-section-content">
          <h4 class="mb-0">Semua Barang</h4>
          <div class="subheading mb-5">Daftar Semua Barang</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Include the database configuration file
              require_once 'configAdmins.php';
  
              // Fetch product entries from the database
              $query = "SELECT * FROM data_produk";
              $result = mysqli_query($connection, $query);
  
              // Check if any rows are returned
              if (mysqli_num_rows($result) > 0) {
                // Iterate over the rows and generate table rows dynamically
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<th scope='row'>" . $row['product_id'] . "</th>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>Rp. " . number_format($row['price'], 0, ',', '.') . "</td>";
                  echo "<td>" . $row['description'] . "</td>";
                  echo "<td><img src='assets/img/produk/" . $row['img_file_path'] . "' alt='Product Image' width='100'></td>";
                  echo "<td>";
                  echo "<a class='btn btn-warning btn-xl text-uppercase text-white fw-bold' href='editproduk.php?product_id=" . $row['product_id'] . "'>Edit</a>";
                  echo "<form method='POST' action='hapusproduk.php'>";
                  echo "<input type='hidden' name='product_id' value='" . $row['product_id'] . "'>";
                  echo "<button type='submit' class='btn btn-danger btn-xl text-uppercase text-white fw-bold' onclick=\"return confirm('Yakin mau dihapus?')\">Hapus</button>";
                  echo "</form>";
                  echo "</td>";
                  echo "</tr>";
                }
              } else {
                echo "<tr><td colspan='6'>No products found.</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
