<?php
  include("database.php");
  $table = $_POST['type'];
  $id = $_POST['itemId'];

  $sqlNew = "DELETE FROM $table WHERE id=$id";
  $result = mysqli_query($conn, $sqlNew);
  header("Location: deleteEntity.php?status=success");
?>