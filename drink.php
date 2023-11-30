<?php
    include("database.php");
    $sql = "SELECT * FROM drink";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) { // if may result
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<button class="rectangle relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900   rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            <span class="w-[100%] h-[100%] flex items-center justify-center text-xl relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 uppercase">
            '.$row['name'].'
            <br>
            ('.$row['price'].')
            </span>
        </button>';
        }
    } else { // kapag walang result
        echo '<h1>THERE ARE CURRENTLY NO DRINK </h1>';
    }
?>