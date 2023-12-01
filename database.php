<?php

$host = 'localhost'; // localhost or 127.0.0.1 pag ayaw gumana
$user = 'root'; // usually root to lagi
$password = 'pass1234'; // database password, usually wala
$database = 'posTry'; // database name
$conn = '';

try {
    $conn = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception) {
    echo '<h1>Could Not Connect</h1>';
}


?>