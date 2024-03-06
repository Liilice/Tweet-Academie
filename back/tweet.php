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
            // $statement_hastag_list = $pdo->query("INSERT INTO hastag_list(hashtag) VALUES ('$tweet');");
            header("Location: ../front/homepage.php");
        }
    }
