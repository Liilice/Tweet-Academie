<?php
    $pdo = require_once("database.php");
    $pseudo_id = $_GET["pseudo_id"];
    $statement_pseudo_id = $pdo->query("SELECT user.id, user.username, user.at_user_name, user.profile_picture, user.bio, user.banner,user.creation_time, user.city,user.campus, tweet.id_user, tweet.id_response, tweet.time, tweet.content FROM user JOIN tweet ON user.id = tweet.id_user WHERE user.id = $pseudo_id ORDER BY tweet.time DESC");
    $resultat_pseudo_id = $statement_pseudo_id->fetchAll(PDO::FETCH_ASSOC);
    if($resultat_pseudo_id){
        echo json_encode($resultat_pseudo_id); 
    }else{
        $statement_pseudo_info = $pdo->query("SELECT * FROM user WHERE user.id = $pseudo_id");
        $resultat_profil = $statement_pseudo_info->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultat_profil); 
    }
   