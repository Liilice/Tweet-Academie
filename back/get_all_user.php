<?php
    $pdo = require_once("./database.php");
    $statement = $pdo->query("SELECT at_user_name FROM user;");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result); 