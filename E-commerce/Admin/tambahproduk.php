<?php
//Connect Database
include_once('configAdmins.php');

// Retrieve form data
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar'];

// Prepare and execute the SQL statement
$stmt = $connection->prepare("INSERT INTO data_produk (product_id, name, price, description, img_file_path) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssdss", $kode_barang, $nama_barang, $harga, $deskripsi, $gambar['name']);

if ($stmt->execute()) {
    // Move the uploaded file to a desired location
    $target_dir = "assets/img/produk/";
    $target_file = $target_dir . basename($gambar["name"]);
    move_uploaded_file($gambar["tmp_name"], $target_file);

    echo "Product entry added successfully.";
    header("Location: home.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
?>