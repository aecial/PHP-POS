<?php
  /*
    Checks if someone is logged in by looking for an Id
    If it does not exist, users will be sent back to the login page

  */
  session_start();
  if(empty($_SESSION['id'])) {
    header("Location: index.php");
  }
  if($_SESSION['role'] == "cashier") {
      header("Location: pos.php?".$_SESSION['role']."");    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Item</title>
  <link rel="stylesheet" href="./public/css/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./node_modules/toastr/build/toastr.css">
  <link href="toastr.css" rel="stylesheet"/>
</head>
<body>
  <?php 
    if($_SESSION['role'] == "manager") {
      include("./components/managerNav.php"); 
    } else {
      include("./components/adminNav.php"); 
    }
  ?>
  <main class="bg-slate-600 content-height flex justify-center items-center">
    <form action="editPrice.php" method="POST">
    <select name="type" id="menuChoice" onchange="updInp(value)" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[50%] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected value="food">FOOD</option>
            <option value="drink">DRINKS</option>
            <option value="other">OTHERS</option>
    </select>
    <select name="itemId" id="data-div" class="bg-gray-50 border border-gray-300 uppercase text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </select>
    <div class="mb-5">
      <label for="default-input" class="block mb-2 text-4xl font-medium text-gray-900 dark:text-white">Price:</label>
      <input type="number" name="price" id="priceInp" id="default-input" class="bg-gray  -50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 text-2xl text-white">
    </div>
    <button type="submit" name="edit" class="w-full relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
        <span class="text-xl relative w-full px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
          EDIT
        </span>
      </button>
    </form>
  </main>
  <script src="./public/js/updateItem.js"></script>
  <script src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./node_modules/toastr/build/toastr.min.js"></script>
  <script>
     function notifCall() {
      toastr.success("<p class='text-lg'>You have updated an Item!</p>");
     }
     function notifCallError() {
      toastr.error("<p class='text-lg'>Encountered an Error. Please Try Again</p>");
     }
      toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "100",
      "hideDuration": "1",
      "timeOut": "2000",
      "extendedTimeOut": "3000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  </script>
  <?php
    if(isset($_GET['status'])){
      if($_GET['status'] == 'success') {
        echo '<script>notifCall();</script>';
      } else {
        echo '<script>notifCallError();</script>';
      }
          
    }
  ?>
</body>
</html>