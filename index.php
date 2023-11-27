<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="./public/css/output.css">
</head>
<body>
  <main class="h-[100vh] flex justify-center items-center bg-slate-400">
    <form action="login.php" method="post" class="flex flex-col w-[25%]">
      <label class="text-slate-50">Email:</label>
      <input type="email" name="email" id="emailInp" class="mb-2">
      <label class="text-slate-50">Password:</label>
      <input type="password" name="password" id="passwordInp" class="mb-2">
      <button type="submit" name="submit" class="border border-white w-[20%] mx-auto text-xl uppercase text-white p-2">login</button>
    </form>
  </main>
</body>
</html>