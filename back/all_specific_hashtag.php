<?php
// header("")
// $pdo = require_once("database.php");
// $hashtag = $_POST["hashtag"];
// echo $hashtag;
// // $statement_hashtag = $pdo->query("SELECT tweet.id, time, content, username, at_user_name, profile_picture FROM tweet JOIN user ON tweet.id_user = user.id WHERE content LIKE '%%';");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hashtag"])) {
    $hashtag = $_POST["hashtag"];
    // Faites quelque chose avec la valeur du hashtag
    echo "Le hashtag est : " . $hashtag;
}