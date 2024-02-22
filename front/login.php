<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style><?php include "./css/normalize.css"?></style>
    <style><?php include "./css/output.css"?></style>
    <title>LOGIN</title>
</head>
<body class="bg-black h-screen">
<main class="md:flex">
    <img class="md:h-[calc(100vh-3rem)] md:w-[calc(100%/2)] md:left-0 h-[calc(100vh-75vh)] relative left-[calc(100%/2-14%)]" src="./img/X_logo_2023_(white).png" alt="Logo">
    <div class="md:h-[calc(100vh-3rem)] md:w-[calc(100%/2)] flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold text-white pb-14">LOGIN</h1>
        <form action="login.php" method="post" class="flex flex-col space-y-4 w-full max-w-md">
            <input type="text" name="username" placeholder="Username" class="p-2 rounded-md bg-gray-800 text-white">
            <input type="password" name="password" placeholder="Password" class="p-2 rounded-md bg-gray-800 text-white">
            <button type="submit" class="p-2 bg-white rounded-md hover:bg-white/80 duration-300">Login</button>
            <a href="#" class="px-2	no-underline text-white text-center	">Forgot password ?</a>
            <a href="register.php" class="p-2 no-underline text-white border-t border-solid border-gray-500	text-center	">Not register yet ?</a>
        </form>
    </div>
</main>
<footer class="text-white border-t border-solid border-gray-500 text-end pt-2	 pr-16">© WAC 2024</footer>
<script><?php include "../node_modules/flowbite/dist/flowbite.min.js"?></script>
</body>
</html>