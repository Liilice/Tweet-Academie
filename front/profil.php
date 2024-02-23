<?php
session_start(); 

if (!isset($_SESSION['user_id'])) {
    echo "non connecter";
}

echo "Bienvenue, " . $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style><?php include "./css/normalize.css"?></style>
    <style><?php include "./css/output.css"?></style>
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>
</body>
</html>