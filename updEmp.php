<?php
  include("database.php");
  $userId = $_POST['userId'];
  $newPass = $_POST['password'];
  $confPass = $_POST['conf_password'];
  if($newPass === $confPass) {
    $hash = password_hash($newPass, PASSWORD_DEFAULT);
    $sqlNew = "UPDATE users SET password='$hash' WHERE id=$userId";
    $result = mysqli_query($conn, $sqlNew);
    header("Location: updateEmployee.php?success");
  }
  
  
?>