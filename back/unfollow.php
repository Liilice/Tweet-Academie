<?php

session_start();
$id_user = $_SESSION['user_id'];
$id_user_to_unfollow = $_GET["id_user_to_unfollow"];
$pdo = require_once("database.php");
$statement_unfollow = $pdo->query("DELETE FROM follow WHERE id_user = $id_user AND id_follow = $id_user_to_unfollow;");
header("Location: ../front/profil_search_user.php?pseudo_id=" . $id_user_to_unfollow);