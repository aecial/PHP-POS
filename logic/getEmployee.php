<?php
    include("database.php");
    $sql = "SELECT id, email, role FROM users WHERE NOT role = 'admin'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) { // if may result
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<option value="'.$row['id'].'">'.$row['email'] . " | " .$row['role'].'</option>';
      }
  } else { // kapag walang result
      echo '<h1>THERE ARE CURRENTLY NO FOOD </h1>';
  }
?>