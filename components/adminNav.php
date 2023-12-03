<nav class="h-[75px] flex justify-between items-center px-4 w-[100%] bg-slate-800 text-white">
  <a href="pos.php" class="underline underline-offset-4 flex items-center"><img class="rounded-full w-14 h-14" src="./public/assets/devFocuspurple.svg" alt="LOGO"> POS</a>
  <a href="addItem.php" class="underline underline-offset-4">ADD ITEM</a>
  <a href="updateItem.php" class="underline underline-offset-4">UPDATE ITEM</a>
  <a href="addEmployee.php" class="underline underline-offset-4">ADD EMPLOYEE</a>
  <form action="logout.php" method="POST">
    <button type="submit" name="logout" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
      <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
        Sign Out
      </span>
    </button>
  </form>
</nav>