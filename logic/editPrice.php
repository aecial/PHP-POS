<?php
  include("database.php");
  $table = $_POST['type'];
  $id = $_POST['itemId'];
  $newPrice = $_POST['price'];
  $sqlNew = "UPDATE $table SET price='$newPrice' WHERE id=$id";
  $result = mysqli_query($conn, $sqlNew);
  header("Location: ../pages/updateItem.php?status=success");
?>