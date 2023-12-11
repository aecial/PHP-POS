<?php
  include("database.php");
  $sql = "DELETE FROM orders";
  $result = mysqli_query($conn, $sql);
?>