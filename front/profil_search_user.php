<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/output.css">
    <script src="https://kit.fontawesome.com/96249701bf.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="./js/show_pseudo.js"></script>
    <title>document</title>
</head>
<body class="bg-black">
<?php
require_once("../back/is_login.php");
$user = is_login();
?>
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
    </div>
    <a href="./profil.php" class="text-white hover:bg-gray-800 hover:rounded-full text-base flex justify-between items-center py-2 pr-2.5 pl-3.5 mr-2.5">
        <img class="w-11 h-11 rounded-full bg-white" src="./img/<?=$user[0]["profile_picture"]?>" alt="">
        <div class="flex flex-col basis-3/4	ml-2.5 text-base">
            <span class="font-medium"><?=$user[0]["username"]?></span>
            <span class="text-gray-500"><?=$user[0]["at_user_name"]?></span>
        </div>
        <i class="material-icons outlined">
            More_horiz
        </i>
    </a>
</header>

<main class="pl-80">
    <div class="flex flex-col w-3/5">
        <div id="container" class="flex flex-col ">
            <div class="flex justify-between items-center mx-4" id="img_button">
                <img class= "h-1/3 w-1/3" id="img">
                <?php
                $pdo = require("../back/database.php");
                $id_follow = $_GET["pseudo_id"];
                $id_user = $_SESSION['user_id'];
                $statement_followings = $pdo->query("SELECT * FROM follow JOIN user ON user.id = follow.id_follow WHERE id_user = $id_user AND id_follow = $id_follow;");
                $result_check = $statement_followings->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?=$result_check? "<button class='border border-solid border-gray-500 py-2 px-4 rounded-2xl bg-white text-black font-bold h-11 unfollow'>Unfollow</button>":"<button class='border border-solid border-gray-500 py-2 px-4 rounded-2xl bg-white text-black font-bold h-11 follow'>Follow</button>" ?>
            </div>
            <div id="div_info">
                <ul class="text-white mx-4 text-lg" id="ul"></ul>
            </div>
        </div>
        <h3 class="text-white mt-10 text-center mb-2">POST</h3>
        <div id="container_post" class="flex flex-col "></div>
    </div>
    <div class="side-feed"></div>
</main>
<script><?php include "../node_modules/flowbite/dist/flowbite.min.js"?></script>
</body>
</html>