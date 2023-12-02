<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="./public/css/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-[100vh] flex justify-center items-center bg-slate-400">

  <main class="h-[100vh] w-full flex justify-center items-center bg-slate-600">
    <form action="login.php" method="post" class="flex flex-col justify-center w-[25%] h-[40%]">
    <div class="">
      <label for="default-input" class="block mb-2 text-4xl font-medium text-gray-900 dark:text-white">Email:</label>
      <input type="email" name="email" id="emailInp" id="default-input" class="bg-gray  -50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 text-2xl text-white">
    </div>
    <div class="mb-5">
      <label for="default-input" class="block mb-2 text-4xl font-medium text-gray-900 dark:text-white">Password:</label>
      <input type="password" name="password" id="passwordInp" id="default-input" class="bg-gray  -50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 text-2xl text-white">
    </div>
      <!-- <label class="text-slate-50">Email:</label>
      <input type="email" name="email" id="emailInp" class="mb-2"> -->
      <!-- <label class="text-slate-50">Password:</label>
      <input type="password" name="password" id="passwordInp" class="mb-2"> -->
      <button type="submit" name="login" class="w-full relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
        <span class="text-xl relative w-full px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
          LOGIN
        </span>
      </button>
      <!-- <button type="submit" name="submit" class="mt-5 border border-white w-[20%] mx-auto text-xl uppercase text-white p-2">login</button> -->
    </form>
  </main>
</body>
</html>