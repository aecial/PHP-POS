<?php
    include("database.php");
    $name = $_POST['name'];
    $sql = "DELETE FROM orders WHERE name='$name'";
    $result = mysqli_query($conn, $sql);
    // if($result) {
    //   echo "OK";
    // } else {
    //   echo "NOMMM";
    // }
?>