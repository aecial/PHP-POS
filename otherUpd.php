<?php
    include("database.php");
    $sql = "SELECT * FROM other";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) { // if may result
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option class="uppercase" value="'.$row['id'].'">'.$row['name'].'</option>';
        }
    } else { // kapag walang result
        echo '<h1>THERE ARE CURRENTLY NO FOOD </h1>';
    }
?>