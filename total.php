<?php 
  include("database.php");
  $sql = "SELECT SUM(price) FROM orders";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $sum = $row['SUM(price)'];
      echo $sum;
    }

  }
  
?>