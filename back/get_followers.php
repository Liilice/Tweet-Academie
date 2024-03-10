<?php 
    function get_followers(): array | false{
        session_start(); 
        $pdo = require("database.php");
        if (!isset($_SESSION['user_id'])) {
            header("Location : ../front/login.php");
        }else{
            $id_user = $_SESSION['user_id'];
            $statement_followers = $pdo->query("SELECT * FROM follow JOIN user ON user.id = follow.id_follow WHERE id_user = $id_user;");
            $resultat_followers = $statement_followers->fetchAll(PDO::FETCH_ASSOC);
        }
        return $resultat_followers ?? false;
    }