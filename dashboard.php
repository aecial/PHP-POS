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
    <main class="bg-slate-600 content-height justify-center items-center flex">
    <div>
        <canvas id="myChart"></canvas>
    </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            datasets: [{
                label: 'GROSS SALES',
                data: [2000, 3000, 11000, 50000, 2000, 3000],
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