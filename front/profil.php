<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/96249701bf.js" crossorigin="anonymous"></script>
    <title>My Account</title>
</head>
<body class="bg-black h-screen">
    <nav class="main_box ">
        <input type="checkbox" id="check">
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
        </div>
        <div class="sidebar_menu">
            <div class="logo">
                <a href="./homepage.php">Twitter</a>
            </div>
            <div class="btn_two">
                <label for="check">
                    <i class="fas fa-times"></i>
                </label>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <i class="fas fa-qrcode"></i>
                        <a href="./profil.php">Profil</a>
                    </li>
                    <li>
                        <i class="fas fa-link"></i>
                        <a href="./message.php">Message</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-bell"></i>
                        <a href="./notification.php">Notification</a>
                    </li>
                    <li>
                        <i class="fa-regular fa-pen-to-square"></i>
                        <a href="./edit_profil.php">Editer</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-right-from-bracket"></i>                        
                        <a href="../back/logout.php">Déconnexion</a>
                    </li>  
                </ul>
            </div>
        </div>
    </nav>

    <div class="md:flex">
        <?php 
            require_once("../back/is_login.php");
            $user = is_login();
        ?>
        <header class="md:h-[calc(100vh-13vh)] md:w-[calc(100%/2-10%)] pl-10">
            <div class="h-[calc(100vh-50vh] w-[calc(100%-40%)]">
                <img class="rounded-full" src="<?=$user[0]["profile_picture"]?"./img/".$user[0]["profile_picture"]:"./img/X_logo_2023_(white).png"?>" alt="photo de profil">
            </div>    
            <button type="button" class="m-auto text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Followers</button>
            <button type="button" class="m-auto text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Followings</button>
        </header>

        <main class="md:h-[calc(100vh-13vh)] md:w-[calc(100%/2+15%)] flex mr-10">
            <section class="mr-10 basis-6/12">
                <ul class="p-3 rounded-lg border border-solid border-gray-300 text-white text-md">Public  
                    <li>User Name :</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white  text-sm"><?=$user[0]["username"]?></li>
                    <li>@ : </li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm"><?=$user[0]["at_user_name"]?></li>
                    <li>Birthday :</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm"><?=$user[0]["birthdate"]?></li>
                    <li>Creation Time :</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm"><?=$user[0]["creation_time"]?></li>
                    <li>City :</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm"><?=$user[0]["city"]?></li>
                    <li>Campus :</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm"><?=$user[0]["campus"]?$user[0]["campus"]:"Non rensigner"?></li>
                    <li>Bio :</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm"><?=$user[0]["bio"]?$user[0]["bio"]:"Non rensigner"?></li>
                </ul>
            </section>
            <section class="privateinfos basis-6/12 flex flex-col">
                <ul class="p-3 rounded-lg border border-solid border-gray-300 text-white text-md">Private<br>
                    <li>Email :</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm"><?=$user[0]["mail"]?></li>
                    <li>Mot de passe</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm">**********</li>
                    <li>City :</li>
                    <li class="p-2 rounded-md bg-gray-800 text-white text-sm"><?=$user[0]["city"]?></li>
                </ul>
                <a href="./edit_profil.php" class="mt-10 p-2 px-4 bg-white opacity-50 rounded-xl hover:bg-white/80 duration-300">Editer son compte</a>
            </section>
        </main>
    </div>
<script><?php include "../node_modules/flowbite/dist/flowbite.min.js"?></script>
</body>
</html>