<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style><?php include "./css/normalize.css"?></style>
    <style><?php include "./css/output.css"?></style>
    <title>Document</title>
  </head>
  <body class="bg-black text-sm">
    <main class="container_main flex flex-col justify-between h-screen">
      <div class="container_login flex items-center">
        <div class="flex grow-0 shrink-0 basis-1/2">
          <img
            src="img/X_logo_2023_(white).png"
            alt="Logo"
            class="max-w-full"
          />
        </div>
        <div class="grow-0 shrink-0 basis-1/3">
          <form action="" method="POST" class="flex items-center flex-col">
            <input
              type="email"
              placeholder="EMAIL"
              name="email"
              id="email"
              class="mb-4 py-2 px-6 bg-black rounded-xl text-white border border-solid border-gray-500 w-4/5"
              required
            />
            <input
              type="password"
              name="password"
              placeholder="PASSWORD"
              id="password"
              class="mb-4 py-2 px-6 bg-black rounded-xl text-white border border-solid border-gray-500 w-4/5"
              required
            />
            <input
              type="text"
              name="username"
              placeholder="USERNAME"
              id="username"
              class="mb-4 py-2 px-6 bg-black rounded-xl text-white border border-solid border-gray-500 w-4/5"
              required
            />
            <input
              type="date"
              name="birthday"
              placeholder="BIRTHDAY"
              id="birthday"
              class="mb-4 py-2 px-6 bg-black rounded-xl text-white border border-solid border-gray-500 w-4/5"
              required
            />
            <select
              name="genre"
              type="genre"
              class="mb-4 py-2 px-6 bg-black rounded-xl text-white border border-solid border-gray-500 w-4/5"
            >
              <option disabled selected size="1">Genre</option>
              <option value="Homme">Homme</option>
              <option value="Femme">Femme</option>
              <option value="Autre">Autre</option>
            </select>
            <input
              type="submit"
              name="envoyer"
              class="button mb-6 py-2 px-6 bg-white text-black rounded-xl border border-solid border-gray-500 opacity-50 w-3/5 cursor-pointer"
              id="submit"
              value="INSCRIPTION"
              required
            />
            <hr class="mb-6 border border-solid border-gray-500 w-4/5" />
            <a href="#" class="no-underline text-white mb-4"
              >ALREADY HAVE AN ACCOUNT ?</a
            >
          </form>
        </div>
      </div>
      <footer
        class="flex justify-end items-center border border-solid border-gray-500 h-20"
      >
        <p class="mr-20 text-white">© WAC 2024</p>
      </footer>
    </main>
    <script><?php include "../node_modules/flowbite/dist/flowbite.min.js"?></script>
  </body>
</html>
