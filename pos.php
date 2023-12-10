<?php
  /*
    Checks if someone is logged in by looking for an Id
    If it does not exist, users will be sent back to the login page

  */
  session_start();
  if(empty($_SESSION['id'])) {
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POS</title>
  <link rel="stylesheet" href="./public/css/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./node_modules/toastr/build/toastr.css">
  <link href="toastr.css" rel="stylesheet"/>
</head>
<body>
<?php 
    if($_SESSION['role'] == "manager") {
      include("./components/managerNav.php"); 
    }
    elseif($_SESSION['role'] == "admin") {
      include("./components/adminNav.php"); 
    }
    else {
      include("./components/cashierNav.php"); 
    }
  ?>
  <main class="bg-slate-600 content-height flex">
    <div class="content-height w-[60%] p-4 border-r-2 border-purple-500">
      <div class=" w-[100%] h-[100%] flex flex-col items-center p-2">
        <h1 class="text-4xl mb-2 text-white">MENU</h1>
        <div class="flex px-4 justify-between w-[100%] mb-2">
          <select id="menu" onchange="selectInp(value)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[20%] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected value="food">FOOD</option>
            <option value="drink">DRINKS</option>
            <option value="other">OTHERS</option>
          </select>



        </div>

        <div id="data-div" class=" w-[100%] h-full grid grid-cols-4 grid-flow-row auto-rows-max gap-4 py-2 pl-2 overflow-y-scroll no-scrollbar ">
            
            <!-- <button class="rectangle relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900   rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="w-[100%] h-[100%] flex items-center justify-center text-xl relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 uppercase">
                FRIED ITIK
                <br>
                (285)
                </span>
            </button> -->
            
        
        </div>

      </div>
    </div>
    <div class="content-height w-[40%] p-4">
      <div class=" h-[70vh] overflow-y-scroll no-scrollbar mb-4">
        <div class="bg-gradient-to-br flex items-center justify-center from-purple-600 to-blue-500 p-0.5 mb-4">
          <span class="text-4xl w-[100%] bg-slate-800 flex text-white items-center justify-center">CART</span>
        </div>
        <div>
         

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-slate-100 uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="data-order">
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            FRIED ITIK
                        </td>
                        <td class="px-6 py-4">
                        ₱285
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
        </div>
      </div>
      <div class=" h-[17vh] flex flex-col">
        <div class=" bg-slate-800 h-[60%]  mb-2 flex justify-between items-center px-5">
        <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-purple-600 to-blue-500">
           TOTAL :
        </h1>
          <h1 id="text-sum" class="text-5xl text-white "></h1>
        </div>
        <div class="h-[40%] flex items-center justify-center">
        <button onclick="removeOrders()" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
      <span class="text-xl relative px-5 py-2.5 transition-all ease-in duration-75 bg-slate-600 hover:text-white rounded-md group-hover:bg-opacity-0 text-white">
      CANCEL
      </span>
      </button>
      <button onclick="done()" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
      <span class=" text-xl relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
      DONE
      </span>
      </button>
        </div>
      </div>
    </div>
  </main>
  <script src="./public/js/pos.js"></script>
  <script src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./node_modules/toastr/build/toastr.min.js"></script>
  <script>
     function notifCall() {
      toastr.success("<p class='text-lg'>You have added a new Item!</p>");
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