<?php
    session_start(); 
    $pdo = require_once("./database.php");
    $id = $_SESSION['user_id'];
    $statement = $pdo->query("SELECT at_user_name FROM user WHERE id NOT IN (3);");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result); 