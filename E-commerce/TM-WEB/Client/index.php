<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Poor Men's Clothing</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/pmcstyle.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <header class="masthead">
      <div class="container">
        <div class="masthead-subheading text-danger fw-bolder">Shop to Your Heart's Content!</div>
        <div class="masthead-heading text-uppercase text-primary fw-bold">Poor Men's Clothing</div>
        <!-- <a class="btn btn-primary btn-xl text-uppercase" href="https://mycollection.shop/arjayapromotion">Ke Shopee</a> -->
      </div>
    </header>

    <!-- produk-->
    <section class="page-section bg-light" id="produk">
      <div class="container">
          <div class="text-center">
              <!-- Section heading omitted for brevity -->
              <!-- Section subheading omitted for brevity -->
          </div>
          <div class="row mb-4">
              <?php
              // Include the database connection code
              include '../Admin/configAdmins.php';

              // Fetch the product entries from the database
              $sql = "SELECT * FROM data_produk";
              $result = $connection->query($sql);

              // Check if there are any product entries
              if ($result->num_rows > 0) {
                  // Loop through each product entry and display it
                  while ($row = $result->fetch_assoc()) {
                      $id = $row['product_id'];
                      $name = $row['name'];
                      $price = number_format($row['price'], 0, ',', '.');
                      $desc = $row['description'];
                      $image = $row['img_file_path'];

                      // Display the product entry
                      echo '
                      <div class="col-lg-3 mb-4">
                          <div class="portfolio-item shadow">
                              <a class="portfolio-link" href="https://shope.ee/99tlbCv9YA">
                                  <div class="portfolio-hover">
                                      <div class="portfolio-hover-content"></div>
                                  </div>
                                  <img class="img-fluid shadow-sm rounded" src="../Admin/assets/img/produk/'.$image.'" alt="..." />
                              </a>
                              <div class="portfolio-caption">
                                  <div class="portfolio-caption-heading">'.$id.' - '.$name.'</div>
                                  <hr />
                                  <div class="timeline-body" style="height: 100px">
                                      <h5 class="text-muted fs-normal">Rp.'.$price.'</h5>
                                      <p class="text-muted fs-normal">'.$desc.'</p>
                                      <a class="btn btn-primary btn-md text-uppercase" href="https://wa.me/6285363105444?text=Saya%20Mau%20Beli%20Barang%20'.$name.'" target="_blank">
                                        Saya Tertarik
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      ';
                  }
              } else {
                  echo '<p>No product entries found.</p>';
              }

              // Close the database connection
              $connection->close();
              ?>
          </div>
      </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4 bg-secondary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-lg-start">Copyright &copy; Poor Men's Clothing 2023</div>
          <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/arjayapromotion" aria-label="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/arjayapromotion" aria-label="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
            <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Portfolio Modals-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
