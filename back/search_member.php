<?php
    $pdo = require_once("database.php");
    $member = isset($_GET['member']) ? $_GET['member'] : '';
    if($member){
        $statement = $pdo->query("SELECT * FROM user WHERE username LIKE '%$member%';");
        $resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    header('Content-Type: application/json');
    echo json_encode($resultat); 
