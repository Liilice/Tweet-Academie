<?php
$pdo = require_once("database.php");
if(!empty($_POST["email"])&&!empty($_POST["username"])&&!empty($_POST["password"])&&!empty($_POST["birthday"])&&!empty($_POST["city"])&&!empty($_POST["name"])){
    $name = $_POST["name"];    
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];   
    $birthday = $_POST["birthday"];   
    $city = $_POST["city"];
    if(!empty($email)&&!empty($username)&&!empty($password)&&!empty($birthday)&&!empty($city)&&!empty($name)){
        $statement_check = $pdo->query("SELECT * FROM user WHERE mail LIKE '$email';");
        $resultat_check = $statement_check->fetchAll(PDO::FETCH_ASSOC);
        if($resultat_check[0]["mail"] == $email || $resultat_check[0]["at_user_name"] == $username){
            header("Location: ../front/error_register.php");
            exit;
        }
        else{
            // realpath(dirname(__FILE__) . '/' .)
            $absolute_path_avatar = '../front/img/default_avatar.png';
            $absolute_path_banner = '../front/img/banner.jpg';
            $hash_password = hash("ripemd160", $password."vive le projet tweet_academy");
            $statement_insert = $pdo->prepare("INSERT INTO user(username,at_user_name,profile_picture,banner,mail,password,birthdate,city) VALUES ('$name', '$username', '$absolute_path_avatar', '$absolute_path_banner', '$email', '$hash_password','$birthday', '$city');");
            $statement_insert->execute();
            header("Location: ../front/login.php");
            exit;
        }
    }
}