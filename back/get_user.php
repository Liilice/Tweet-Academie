<?php
    session_start(); 
    $pdo = require_once("./database.php");
    $id = $_SESSION['user_id'];
    $statement = $pdo->query("SELECT at_user_name FROM user JOIN follow ON user.id = follow.id_follow WHERE id_user =$id;");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result); 