<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
  // Verify username and password
  // ...
  
  // Redirect to home page
  header('Location: home.php');
  exit;
}
?>