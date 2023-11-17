<?php
// Include the database configuration file
require_once 'configAdmins.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the product_id is set and not empty
  if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
    // Sanitize the product_id to prevent SQL injection
    $product_id = mysqli_real_escape_string($connection, $_POST['product_id']);

    // Prepare and execute the SQL statement to delete the entry
    $stmt = $connection->prepare("DELETE FROM data_produk WHERE product_id = ?");
    $stmt->bind_param("s", $product_id);

    if ($stmt->execute()) {
      // Deletion successful
      header("Location: home.php");
      exit();
    } else {
      // Error occurred during deletion
      echo "Error: " . $stmt->error;
    }

    $stmt->close();
  }
}

// Redirect to home.php if accessed directly without a product_id
header("Location: home.php");
exit();
?>