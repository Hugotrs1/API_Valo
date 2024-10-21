<?php
ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-M7B4Au9X9hCBb6WMyA3M8BHzrXm/1Y8VQukMlpt3J4IV3Ac/xnxjopUmgC6zY8Y5" crossorigin="anonymous">
    
    <style>
        body {
            background-image: url('images/valorant_fond.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }
        h1 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            text-align: center;
        }
        p {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            text-align: center;
            margin-bottom: 40px;
        }
        .btn-custom {
            background-color: #ff4d4e; 
            color: white; 
            padding: 15px 30px; 
            border-radius: 8px; 
            transition: background-color 0.5s ease; 
        }
        .btn-custom:hover {
            background-color: white;
            color: #101823; 
        }
        .btn-play {
            margin-top: 20px; 
        }
    </style>
</head>
<body>

<div class="container text-center" style="margin-top: 320px;">
    <h1>Bienvenue sur l'index des Agents et des Armes de Valorant</h1>
    <p>Explorez les agents ainsi que leurs armes et découvrez leurs traits uniques.</p>
    <a href="https://playvalorant.com/fr-fr/" class="btn btn-custom btn-play" target="_blank">Jouer gratuitement</a>

</div>
</body>
<?php
$content = ob_get_clean();
require_once("main.php"); // Inclure le contenu principal après le contenu spécifique
?>