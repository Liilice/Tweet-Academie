<?php
    $dsn = 'mysql:host=localhost;dbname=twitter';
    $user = 'henry';
    $password = '!!Wiisonic22!!';
    try{
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connexion reussi\n";
    }catch(PDOException $e){
        echo "Erreur : ".$e->getMessage();
    }
    return $pdo;