<?php
// Assuming you already have a database connection established
include_once('configAdmins.php');

// Get the form data
$email = $_POST['email'];
$password = $_POST['password'];

// Perform the login query
$query = "SELECT * FROM data_admin WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($connection, $query);

// Check if the query returned a result
if (mysqli_num_rows($result) == 1) {
  // Authentication successful
  // Redirect the user to the home page or any other authenticated area
  header("Location: home.php");
  exit();
} else {
  // Authentication failed
  // You can display an error message or redirect the user back to the login page
  echo "Invalid email or password";
}
?>