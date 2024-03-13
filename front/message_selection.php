<?php
require_once("../back/is_login.php");
$user = is_login();
$userId = $user[0]['id'];

require_once("../back/get_convos.php");
$conversations = getConversationsForUser($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/96249701bf.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<!--    <script src="./js/homepage.js"></script>-->
    <title>Message Selection</title>
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
    <section class="private_message_selection">
        <h1>Séléction de Conversation</h1>
    </section>
    <?php
    if (empty($conversations)) {
        echo '<p class="no_convo_yet">Pas de conversaton actuellement.</p>';
    } else {
        foreach ($conversations as $convo) {
            echo '<section class="convo_selection">';
            echo '<h2><a href="../back/message_instance.php?convoId=' . $convo['id_convo'] . '&convoName=' . $convo['convo_name'] . '">' . htmlspecialchars($convo['convo_name']) . '</a></h2>';
            echo '</section>';
        }
    }
    ?>
</body>
</html>