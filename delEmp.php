<?php
  include("database.php");
  $userId = $_POST['userId'];
  $sql = "DELETE FROM users WHERE id=$userId";
  $result = mysqli_query($conn, $sql);
  header("Location: deleteEmployee.php");
?>