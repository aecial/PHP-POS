<?php
    include("database.php");
    $name = $_POST["name"];
    $price = $_POST["price"];
    $sqlCheck = "SELECT * FROM orders WHERE name='$name'";
    $resCheck = mysqli_query($conn, $sqlCheck); 
    if(mysqli_num_rows($resCheck) > 0) {
        $sqlUpd = "UPDATE orders SET quantity=quantity+1, price=price+$price WHERE name='$name'";
        $resultUpd = mysqli_query($conn, $sqlUpd);
    } else {
        $sqlIns = "INSERT INTO orders(quantity, name, price) VALUES (1, '$name', $price)";
        $result = mysqli_query($conn, $sqlIns);
    }
    
?>  