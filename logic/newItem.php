<?php
    include("database.php");
    $type = $_POST['type'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sql = "INSERT INTO $type(name, price) VALUES ('$name', $price)";
    try {
        $result = mysqli_query($conn, $sql);
        header("Location: ../pages/pos.php?status=success");
    } catch (error) {
        header("Location: ../pages/pos.php?status=error");
    }
    

?>