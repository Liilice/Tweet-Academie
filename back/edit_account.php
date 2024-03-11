<?php
    session_start(); 
    if (!isset($_SESSION['user_id'])) {
        header("Location : ../front/login.php");
    }else{
        $pdo = require_once("database.php");
        $id = $_SESSION['user_id'];
        $statement_user = $pdo->query("SELECT * FROM user WHERE id = $id;");
        $user = $statement_user->fetchAll(PDO::FETCH_ASSOC);

        $file = $_POST["file"] ? $_POST["file"] : $user[0]["profile_picture"];
        $name = $_POST["name"] ? $_POST["name"] : $user[0]["username"];
        $username = $_POST["username"];
        $password = $_POST["password"] ? hash("ripemd160", $_POST["password"]) : $user[0]["password"];
        $city = $_POST["city"] ? $_POST["city"] : $user[0]["city"];
        $bio = $_POST["bio"] ? $_POST["bio"] : ($user[0]["bio"]?$user[0]["bio"]:"non renseigner");
        $campus = $_POST["campus"] ? $_POST["campus"] : ($user[0]["campus"]?$user[0]["campus"]:"non renseigner");
        $private = $_POST["private"];
        if($file && $name && $password && $city && $bio & $campus ){
            if($username){
                $statement_user_pseudo = $pdo->query("SELECT at_user_name FROM user WHERE at_user_name LIKE '$username';");
                $user_pseudo = $statement_user_pseudo->fetchAll(PDO::FETCH_ASSOC);
                if(!empty($user_pseudo)){
                    header('Location: ../front/error.php');
                }else{
                    $statement_username = $pdo->query("UPDATE user SET at_user_name='$username' WHERE id = $id;");
                    $statement_file = $pdo->query("UPDATE user SET profile_picture='$file' WHERE id = $id;");
                    $statement_name = $pdo->query("UPDATE user SET username='$name' WHERE id = $id;");
                    $statement_password = $pdo->query("UPDATE user SET password='$password' WHERE id = $id;");
                    $statement_city = $pdo->query("UPDATE user SET city='$city' WHERE id = $id;");
                    $statement_bio = $pdo->query("UPDATE user SET bio='$bio' WHERE id = $id;");
                    $statement_campus = $pdo->query("UPDATE user SET campus='$campus' WHERE id = $id;");
                    if(isset($_POST['private'])){
                        $statement_private = $pdo->query("UPDATE user SET private = 1 WHERE id = $id;");
                    }else{
                        $statement_private = $pdo->query("UPDATE user SET private = 0 WHERE id = $id;");
                    }
                    header('Location: ../front/profil.php');
                }
            }else {
                $statement_file = $pdo->query("UPDATE user SET profile_picture='$file' WHERE id = $id;");
                $statement_name = $pdo->query("UPDATE user SET username='$name' WHERE id = $id;");
                $statement_password = $pdo->query("UPDATE user SET password='$password' WHERE id = $id;");
                $statement_city = $pdo->query("UPDATE user SET city='$city' WHERE id = $id;");
                $statement_bio = $pdo->query("UPDATE user SET bio='$bio' WHERE id = $id;");
                $statement_campus = $pdo->query("UPDATE user SET campus='$campus' WHERE id = $id;");
                if(isset($_POST['private'])){
                    $statement_private = $pdo->query("UPDATE user SET private = 1 WHERE id = $id;");
                }else{
                    $statement_private = $pdo->query("UPDATE user SET private = 0 WHERE id = $id;");
                }
                header('Location: ../front/profil.php');
            }
        }
    }