<?php
  try {
    include("database.php");
    $userId = $_POST['userId'];
    $sql = "DELETE FROM users WHERE id=$userId";
    $result = mysqli_query($conn, $sql);
    header("Location: ../pages/deleteEmployee.php?status=success");
  } catch (error) {
    header("Location: ../pages/deleteEmployee.php?status=error");
  }

  
?>