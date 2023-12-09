<?php
  /*
    Checks if someone is logged in by looking for an Id
    If it does not exist, users will be sent back to the login page

  */
  session_start();
  if(empty($_SESSION['id'])) {
    header("Location: index.php");
  }
  if($_SESSION['role'] != "admin") {
    if($_SESSION['role'] == "cashier") {
      header("Location: pos.php");
    } else {
      header("Location: itemManagement.php");
    }
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Employee</title>
  <link rel="stylesheet" href="./public/css/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <?php include("./components/adminNav.php"); ?>
  <main class="bg-slate-600 content-height justify-center items-center flex">
  <form action="delEmp.php" method="POST">
  <label for="default-input" class="block mb-2 text-4xl font-medium text-gray-900 dark:text-white">Account:</label>
  <select name="userId" id="data-div" onchange="updInp(value)" class="mb-10 sw-full bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>

    </select>
    <button type="submit" name="delete" class="w-full relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
        <span class="text-xl relative w-full px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
          DELETE
        </span>
      </button>
    <!-- <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <input type="password" name="conf_password" id="conf_password">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
    <select name="role" id="roles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option value="cashier">CASHIER</option>
      <option value="manager">MANAGER</option>
    </select>
    <button type="submit" name="register">REGISTER</button> -->
  </form>
  </main>
  <script src="./public/js/updateEmployee.js"></script>
</body>
</html>