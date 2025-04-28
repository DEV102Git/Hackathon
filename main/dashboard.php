<?php
session_start();
if(!isset($_SESSION["LoggedIn"])) { //redirection si le user n'est pas connectee
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .navbar {
            background-color: #000;
            color: #fff;
            padding: 15px 30px;
        }

        .navbar span {
            color: aqua;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="navbar" style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        👥Bienvenue, <span><?php echo isset($_SESSION["User"]) ? htmlspecialchars($_SESSION["User"]) : "Utilisateur" ?></span>
    </div>
    <a href="logout.php" style="color: white; text-decoration: none; font-weight: bold;">🚪Déconnexion</a>
</div>

<div style="border: 4px solid #000; margin: 30px; padding: 20px; font-size: 1.2em;">
    <p>Votre Dashboard</p>
</div>

</body>
</html>
