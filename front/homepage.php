<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet" />
    <style><?php include "./css/normalize.css"?></style>
    <style><?php include "./css/output.css"?></style>
    <script src="https://kit.fontawesome.com/96249701bf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body class="bg-black">
    <header class="flex flex-col justify-between w-1/4 h-full fixed border-r border-solid border-gray-500">
        <div class="flex flex-col w-full h-3/4 justify-between">
            <a href="./homepage.php" class="text-white flex items-center text-2xl p-2 pr-6 pl-2 w-fit hover:bg-gray-800 hover:rounded-full ">
                <i class="fa-solid fa-house"></i>
               <span class="ml-4">Accueil</span>
            </a>
            <a href="./profil.php" class="text-white flex items-center text-2xl p-2 pr-6 pl-2 w-fit hover:bg-gray-800 hover:rounded-full ">
                <i class="fa-solid fa-user"></i>
                <span class="ml-4">Profil</span>
            </a>
            <a href="./notification.php" class="text-white flex items-center text-2xl p-2 pr-6 pl-2 w-fit hover:bg-gray-800 hover:rounded-full ">
                <i class="fa-solid fa-bell"></i>
                <span class="ml-4">Notification</span>
            </a>
            <a href="./message.php" class="text-white flex items-center text-2xl p-2 pr-6 pl-2 w-fit hover:bg-gray-800 hover:rounded-full ">
                <i class="fa-solid fa-envelope"></i>
                <span class="ml-4">Message</span>
            </a>
            <form action="" method="POST" id="" class="flex items-center text-2xl p-2 pr-6 pl-2 w-fit hover:bg-gray-800 hover:rounded-full ">
                <i class="fa-solid fa-magnifying-glass text-white"></i>
                <input type="search" name="" id="" class="ml-4" placeholder="Rechercher" />
            </form>
        </div>
        <a href="./profil.php" class="text-white hover:bg-gray-800 hover:rounded-full text-base flex justify-between items-center py-2 pr-2.5 pl-3.5 mr-2.5">
            <img class="w-11 h-11 rounded-full bg-white" src="./img/Givrali.png" alt="">
            <div class="flex flex-col basis-3/4	ml-2.5 text-base">
                <span class="font-medium">Inconnu Aubat</span>
                <span class="text-gray-500">@Inconaubat</span>
            </div>
            <i class="material-icons outlined">
                More_horiz
            </i>
        </a>
    </header>
    
    <main class="ml-80">
        <div class="flex flex-col w-3/5">
            <div class="flex justify-between items-center text-white text-2xl px-4 sticky top-0">  
                <span>Accueil</span>
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
            </div>
            
            <div class="flex">
                <img class="h-11 w-11" src="./img/X_logo_2023_(white).png" alt="">
                <div class="flex flex-col justify-evenly pt-1 w-full ml-3">
                    <textarea placeholder="Quoi de nouveau ?" name="" id="" cols="30" rows="5"></textarea>
                    <div class="flex justify-between items-center h-16 w-full">
                        <ul class="flex list-none">
                            <li class="text-white">
                                <span class="material-symbols-outlined">photo_library</span>  
                            </li>
                            <li class="text-white">
                                <span class="material-symbols-outlined">gif_box</span>
                            </li>
                        </ul>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-bold rounded-full text-sm px-5 py-2.5 me-2 mt-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700">Tweet</button>
                    </div>
                </div>
            </div>

            <div class="flex w-full min-h-24 px-4 py-3 border-t border-solid border-gray-500">
                <img class="h-11 w-11" src="./img/X_logo_2023_(white).png" alt="">
                <div class="flex flex-col w-full ml-3">
                    <div class="flex items-start justify-between text-xl">
                        <a href="" class="font-normal text-white">
                            Inconnu Aubat
                            <span class="text-gray-500">
                                @Inconaubat
                            </span>
                        </a>
                        <i class="material-icons-outlined text-gray-500 text-3xl font-bold">
                            @Inconaubat
                        </i>
                    </div>  
                    <div class="text-white text-2xl w-full">
                        <p>Ceci est un Tweet </p>
                    </div>
                    <div class="flex justify-between my-3.5 pr-12">
                        <i class="material-icons outlined text-gray-500">
                            <span class="material-symbols-outlined">mode_comment</span>
                        </i>
                        <i class="material-icons outlined text-gray-500">
                            <span class="material-symbols-outlined">sync</span>
                        </i>
                        <i class="material-icons outlined text-gray-500">
                            <span class="material-symbols-outlined">favorite</span>
                        </i>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-feed"></div>
    </main>
    <script><?php include "../node_modules/flowbite/dist/flowbite.min.js"?></script>
</body>
</html>