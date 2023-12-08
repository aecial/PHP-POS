<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./public/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include("./components/adminNav.php"); ?>
    <main class="bg-slate-600 content-height justify-center items-center flex flex-col">
    <h1 class="text-4xl text-white mb-4">Monthly Gross Sales</h1>
    <div class="bg-black text-white w-[60%] h-[70%]">
        
        <canvas id="myChart"></canvas>
    </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php
     include("database.php");
     $prices = array();
     $sql = "SELECT SUM(total) FROM transactions GROUP BY date";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
         $price = $row['SUM(total)'];
         array_push($prices, $price);
       }
       print_r($prices);
       echo count($prices);
     }
     include("database.php");
     $dates = array();
     $sqlDate = "SELECT DISTINCT date FROM transactions";
     $resultDate = mysqli_query($conn, $sqlDate);
     if(mysqli_num_rows($resultDate) > 0) {
       while ($row = mysqli_fetch_assoc($resultDate)) {
         $date = $row['date'];
         array_push($dates, $date);
       }
     }
     
    ?>
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: [<?php for($i = 0; $i <= count($dates)-1; $i++) {
                echo "'".$dates[$i]."',";
            } ?>],
            datasets: [{
                label: 'DECEMBER GROSS SALES',
                data: [<?php for($i = 0; $i <= count($prices)-1; $i++) {
                echo "'".$prices[$i]."',";
            } ?>],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: false
                }
            }
            }
        });
    </script>
</body>
</html>