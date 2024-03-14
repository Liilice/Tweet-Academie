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
            $statement_tweet = $pdo->prepare("INSERT INTO tweet(id_user, content) VALUES (?, ?);");
            $statement_tweet->execute([$id,$tweet]);
            $arr = explode(" ", $tweet);
            foreach($arr as $key => $value){
                if(str_starts_with($value, "#")){
                    $statement_hastag_list = $pdo->prepare("INSERT INTO hashtag_list(hashtag) VALUES (?);");
                    $statement_hastag_list->execute([$value]);
                }
            }
            header("Location: ../front/homepage.php");
        }
    }
