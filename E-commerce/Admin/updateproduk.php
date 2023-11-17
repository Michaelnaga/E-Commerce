<?php
// Include the database configuration file
require_once 'configAdmins.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $product_id = $_POST['kodeBarang'];
    $nama_barang = $_POST['namaBarang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    // Prepare the update query
    $query = "UPDATE data_produk SET name = '$nama_barang', price = '$harga', description = '$deskripsi', img_file_path = '$gambar' WHERE product_id = '$product_id'";

    // Execute the update query
    if (mysqli_query($connection, $query)) {
        // Redirect back to home.php
        header('Location: home.php');
        exit;
    } else {
        echo "Error updating product: " . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>
