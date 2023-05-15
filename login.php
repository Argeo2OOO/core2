<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "core2_db";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Collect the username and password from the form
$username = $_POST["username"];
$password = $_POST["password"];

// Look up the user in the database
$sql = "SELECT * FROM core2_users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
  // Successful login
  session_start();
  $_SESSION["username"] = $username;
  header("Location: dashboard.php");
} else {
  // Failed login
  echo "Invalid username or password";
}

// Close the database connection
mysqli_close($conn);
?>
