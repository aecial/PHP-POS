<?php
  include("database.php");
  $total = $_POST['total'];
  $sql = "INSERT INTO transactions(total) VALUES ('$total')";
  $result = mysqli_query($conn, $sql);
?>