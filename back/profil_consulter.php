<?php
    $pdo = require_once("database.php");
    $pseudo_id = $_GET["pseudo_id"];
    $statement_pseudo_id = $pdo->query("SELECT * FROM user JOIN tweet ON user.id = tweet.id_user WHERE user.id = $pseudo_id");
    $resultat_pseudo_id = $statement_pseudo_id->fetchAll(PDO::FETCH_ASSOC);
    if($resultat_pseudo_id){
        echo json_encode($resultat_pseudo_id); 
    }else{
        $statement_pseudo_info = $pdo->query("SELECT * FROM user WHERE user.id = $pseudo_id");
        $resultat_profil = $statement_pseudo_info->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultat_profil); 
    }
   