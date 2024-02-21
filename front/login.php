<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style><?php include "./css/normalize.css"?></style>
    <style><?php include "./css/output.css"?></style>
    <title>LOGIN</title>
  </head>
  <body class="bg-black md:flex">
      <img class="lg:h-[calc(100vh-3rem)] lg:w-[calc(100%/2)]" src="./img/X_logo_2023_(white).png" alt="Logo">
      <div class="lg:h-[calc(100vh-3rem)] lg:w-[calc(100%/2)] flex flex-col justify-center items-center">
          <h1 class="text-4xl font-bold text-white pb-14">LOGIN</h1>
          <form action="login.php" method="post" class="flex flex-col space-y-4 w-full max-w-md">
              <input type="text" name="username" placeholder="Username" class="p-2 rounded-md bg-gray-800 text-white">
              <input type="password" name="password" placeholder="Password" class="p-2 rounded-md bg-gray-800 text-white">
              <button type="submit" class="p-2 bg-white rounded-md hover:bg-white/80 duration-300">Login</button>
          </form>
      </div>
      <script><?php include "../node_modules/flowbite/dist/flowbite.min.js"?></script>
  </body>
</html>
