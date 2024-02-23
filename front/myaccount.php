<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script><?php include "./js/script.js"?></script>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/output.css">
    <!-- CSS PERSO -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>My Account</title>
</head>
<body class="bg-black h-screen">
    <!-- NAVBAR -->
    <nav class="main_box">
        <input type="checkbox" id="check">
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
        </div>
        <div class="sidebar_menu">
            <div class="logo">
                <a href="index.php">Twitter</a>
            </div>
            <div class="btn_two">
                <label for="check">
                    <i class="fas fa-times"></i>
                </label>
            </div>
            <div class="menu">
                <ul>
                    <li><i class="fas fa-qrcode"></i>
                        <a href="myaccount.php">Profil</a>
                    </li>
                    <li><i class="fas fa-link"></i>
                        <a href="message.html">Message</a>
                    </li>
                    <li><i class="fa-solid fa-bell"></i>
                        <a href="notification.php">Notification</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="md:flex">
        <header class="md:h-[calc(100vh-3rem)] md:w-[calc(100%/2)]">
            <img class="rounded-full m-auto" src="./img/lightlogo.png" alt="photo de profil">
            <button type="button" class="m-auto text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Followers</button>
            <button type="button" class="m-auto text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Followings</button>
        </header>

        <main class="md:h-[calc(100vh-3rem)] md:w-[calc(100x%/2)] flex ">
                    <!-- PUBLIC INFOS -->
            <section class="publicinfos mr-24">
                <ul class="p-3 rounded-lg border border-solid border-gray-300 text-white text-2xl">Public  

                    <li>User Name</li>
                    <input name="username" type="text" class="p-3 mb-4 rounded-md bg-gray-800 text-white">

                    <br>
                    <a>@ : </a>
                    <li name="@" type="text" class="p-3 mb-4 rounded-md bg-gray-800 text-white"></li>

                    <li>First Name</li>
                    <input name="firstname" type="text" class="p-3 mb-4 rounded-md bg-gray-800 text-white">

                    <li>Last Name</li>
                    <input name="lastname" type="text" class="p-3 mb-4 rounded-md bg-gray-800 text-white">

                    <br>
                    <a>Date de naissance</a>
                    <li name="birthdate" type="date" class="p-3 mb-4 rounded-md bg-gray-800 text-white"></li>

                    <li>Bio</li>
                    <input name="bio" type="text" class="p-3 mb-4 rounded-md bg-gray-800 text-white">
                </ul>
            </section>
            <!-- PRIVATE INFOS -->
            <section class="privateinfos">
                <ul class="p-3 rounded-lg border border-solid border-gray-300 text-white text-2xl">Private<br>
                    <a>Email</a>
                    <li name="email" type="email" class="p-3 mb-4 rounded-md bg-gray-800 text-white"></li>

                    <li>Mot de passe</li>
                    <input name="password" type="password" class="p-3 mb-4 rounded-md bg-gray-800 text-white">

                    <li>Telephone</li>
                    <input name="tel" type="tel" class="p-3 mb-4 rounded-md bg-gray-800 text-white">

                    <li>Geolocalisation</li>
                    <input name="geoloc" type="text" class="p-3 mb-4 rounded-md bg-gray-800 text-white">
                </ul>
            </section>
        </main>
        <button type="button" class="m-auto text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Modifier</button>
    </div>
<script><?php include "../node_modules/flowbite/dist/flowbite.min.js"?></script>
</body>
</html>