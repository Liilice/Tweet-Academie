<?php
$pdo = require_once("database.php");
if(!empty($_POST["email"])&&!empty($_POST["password"])){  
    $email = $_POST["email"];   
    $password = $_POST["password"];
    if(!empty($email)&&!empty($password)){
        $statement_check = $pdo->query("SELECT * FROM user WHERE mail LIKE '$email';");
        $resultat_check = $statement_check->fetchAll(PDO::FETCH_ASSOC);
        if(empty($resultat_check)){
            header("Location: ../front/error_login.php");
            exit;
        }else{
            $hash_enter = hash('ripemd160', $password."vive le projet tweet_academy");
            if($hash_enter == $resultat_check[0]["password"]){
                session_start();
                $_SESSION['user_id'] = $resultat_check[0]["id"];
                header('Location: ../front/profil.php');
                exit;
            }else{
                header("Location: ../front/error_login.php");
                exit;
            }
        }
}
}
