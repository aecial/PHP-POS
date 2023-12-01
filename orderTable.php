<?php
        include("database.php");
        $sql = "SELECT * FROM orders ORDER BY date ASC";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) { // if may result
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            
                <td class="px-6 py-4">
                    '.$row['quantity'].'
                </td>
                <td class="px-6 py-4">
                    '.$row['name'].'
                </td>
                <td class="px-6 py-4">
                    '.$row['price'].'
                </td>
                <td class="px-6 py-4">
                    <button onclick="deleteItem(this)" data-value1="'.$row['name'].'" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                </td>
            </tr>';
            }
        }
?>