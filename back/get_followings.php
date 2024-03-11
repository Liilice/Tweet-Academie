<?php
    function get_followings(): array | false{
        session_start();
        $pdo = require("database.php");
        if (!isset($_SESSION['user_id'])) {
            header("Location : ../front/login.php");
        }else{
            $id_user = $_SESSION['user_id'];
            $statement_followings = $pdo->query("SELECT * FROM follow JOIN user ON user.id = follow.id_follow WHERE id_user = $id_user;");
            $resultat_followings = $statement_followings->fetchAll(PDO::FETCH_ASSOC);
        }
        return $resultat_followings ?? false;
    }
  
