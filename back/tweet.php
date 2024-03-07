<?php
    header('Content-Type: application/json');
    session_start(); 
    if (!isset($_SESSION['user_id'])) {
        header("Location : ../front/register.php");
    }else{
        $pdo = require_once("database.php");
        $id = $_SESSION['user_id'];
        $tweet = $_POST["tweet"];
        if($tweet){
            $statement_tweet = $pdo->query("INSERT INTO tweet(id_user, content) VALUES ($id,'$tweet');");
            $arr = explode(" ", $tweet);
            foreach($arr as $key => $value){
                if(str_starts_with($value, "#")){
                    $statement_hastag_list = $pdo->query("INSERT INTO hashtag_list(hashtag) VALUES ('$value');");
                }
            }
            header("Location: ../front/homepage.php");
        }
    }
