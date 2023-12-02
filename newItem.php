<?php
    include("database.php");
    $type = $_POST['type'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sql = "INSERT INTO $type(name, price) VALUES ('$name', $price)";
    $result = mysqli_query($conn, $sql);
    header("Location: pos.php");

?>