<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="./public/css/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./node_modules/toastr/build/toastr.css">
</head>
<body class="h-[100vh] flex justify-center items-center bg-slate-400">

  <main class="h-[100vh] w-full flex flex-col justify-center items-center bg-slate-600">
    <img class="rounded-full w-72 h-72" src="./public/assets/devFocuspurple.svg" alt="LOGO">
    <form action="./logic/login.php" method="post" class="flex flex-col justify-center w-[25%] h-[40%]">
    <div class="">
      <label for="default-input" class="block mb-2 text-4xl font-medium text-gray-900 dark:text-white">Email:</label>
      <input type="email" name="email" id="emailInp" id="default-input" class="bg-gray  -50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 text-2xl text-white">
    </div>
    <div class="mb-5">
      <label for="default-input" class="block mb-2 text-4xl font-medium text-gray-900 dark:text-white">Password:</label>
      <input type="password" name="password" id="passwordInp" id="default-input" class="bg-gray  -50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 text-2xl text-white">
    </div>
      <button type="submit" name="login" class="w-full relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
        <span class="text-xl relative w-full px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
          LOGIN
        </span>
      </button>
    </form>
  </main>
  <script src="./node_modules/jquery/dist/jquery.js"></script>
  <script src="./node_modules/toastr/build/toastr.min.js"></script>
  <script>
     
     function notifCall() {
      toastr.error("<p class='text-lg'>User does not exist!</p>");
      if (location.href.includes('?')) { 
      history.pushState({}, null, location.href.split('?')[0]); 
      }
     }
     function notifCallError() {
      toastr.error("<p class='text-lg'>Incorrect Credentials!</p>");
      if (location.href.includes('?')) { 
      history.pushState({}, null, location.href.split('?')[0]); 
      }
     }

      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
  </script>
  <?php
    if(isset($_GET['status'])){
      if($_GET['status'] == 'undefined') {
        echo '<script>notifCall();</script>';
      } else {
        echo '<script>notifCallError();</script>';
      }
          
    }
  ?>
</body>
</html>