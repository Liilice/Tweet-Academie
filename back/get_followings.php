<?php
    function get_followings($id_user): array | false{
        $pdo = require("database.php");
        $statement_followings = $pdo->query("SELECT * FROM follow JOIN user ON user.id = follow.id_follow WHERE id_user = $id_user;");
        $resultat_followings = $statement_followings->fetchAll(PDO::FETCH_ASSOC);
        return $resultat_followings ?? false;
    }
