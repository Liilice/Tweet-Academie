<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style><?php include "./css/normalize.css"?></style>
    <style><?php include "./css/output.css"?></style>
    <title>Document</title>
  </head>
  <body class="bg-black text-xs">
    <main class="flex flex-col justify-between h-screen">
      <div class="flex flex-col">
            <div class="flex justify-center items-center my-4">
            <img
                src="img/X_logo_2023_(white).png"
                alt="Logo"
                class="w-1/4"
            />
            </div>
            <form action="" method="POST" class="flex items-center flex-col">
                <input
                type="email"
                placeholder="EMAIL"
                name="email"
                id="email"
                class="mb-4 py-4 px-6 rounded-xl text-white bg-black border border-solid border-gray-500 w-3/4"
                required
                />
                <input
                type="password"
                name="password"
                placeholder="PASSWORD"
                id="password"
                class="mb-4 py-4 px-6 rounded-xl text-white bg-black border border-solid border-gray-500 w-3/4"
                required
                />
                <input
                type="submit"
                name="envoyer"
                class="mb-4 py-4 px-6 rounded-xl bg-white text-black border border-solid border-gray-500 opacity-50 w-3/5 cursor-pointer"
                id="submit"
                value="CONNEXION"
                required
                />
                <a href="#" class="no-underline text-white mb-4"
                >FORGOT PASSWORD ?</a
                >
                <hr class="mb-4 border border-solid border-gray-500 w-3/4" />
                <a href="#" class="no-underline text-white mb-4"
                >NOT REGISTER YET ?</a
                >
            </form>
      </div>
      <footer
        class="flex justify-end items-center border-t border-solid border-gray-500 h-12"
      >
        <p class="mr-11 text-white">© WAC 2024</p>
      </footer>
    </main>
    <script><?php include "../node_modules/flowbite/dist/flowbite.min.js"?></script>
  </body>
</html>
