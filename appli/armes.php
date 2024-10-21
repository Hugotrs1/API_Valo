<?php
$armes = json_decode(file_get_contents("http://localhost/API_VALO/API/armes"), true);

ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-M7B4Au9X9hCBb6WMyA3M8BHzrXm/1Y8VQukMlpt3J4IV3Ac/xnxjopUmgC6zY8Y5" crossorigin="anonymous">
    
    <title>Index Valorant</title>
    <style>
body{
    background-image: url('images/valorant_fond3.jpg'); 
    background-size: cover;
    background-repeat: no-repeat;
}

h1 {
    font-family: 'Impact', 'Haettenschweiler', 'Arial Narrow Bold', sans-serif;
    color: white;
    text-align: center;
}

.card {
    background-color: #101823; /* Un gris plus clair pour le fond des cartes */
    border-radius: 12px; /* Coins plus arrondis */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Ombre plus prononcée */
    margin: 20px; /* Marge autour de la carte */
    transition: transform 0.2s ease-in-out; /* Transition pour l'effet au survol */
}

.card:hover {
    transform: scale(1.05); /* Agrandissement au survol, réduit pour un effet subtil */
}

.card-body {
    padding: 15px; /* Espace à l'intérieur de la carte */
    align-items: center; /* Alignement vertical des éléments */
}

.card-title {
    font-size: 1.5rem; /* Taille de la police du titre plus grande */
    color: #f8f9fa; /* Couleur claire pour le texte */
    margin-bottom: 10px; /* Espacement en dessous du titre */
}

.card-text {
    font-size: 1rem; /* Taille de la police pour le texte */
    color: #e0e0e0; /* Couleur légèrement grise pour le texte */
    margin: 5px 0; /* Marge entre les paragraphes */
}

.arme-image {
    width: 100%; /* Utilisation de la largeur complète de la carte */
    height: auto; /* Garde le rapport d'aspect */
    border-radius: 8px; /* Coins arrondis pour l'image */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ombre pour l'image */
}

.d-flex {
    display: flex;
    align-items: center; /* Aligner les éléments au centre verticalement */
    justify-content: space-between; /* Espacement entre les éléments */
}


    </style>
</head>
<body>

<div class="container mt-4">
    <h1>Index Armes</h1>
    <div class="row">
    <?php
    if (!is_array($armes) || empty($armes)) {
        echo "<p>Aucune arme disponible.</p>";
    } else {
        foreach ($armes as $arme): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body d-flex">
                        <div>
                            <h5 class="card-title"><?php echo htmlspecialchars($arme['nom']); ?></h5>
                            <p class="card-text">Prix: <?php echo htmlspecialchars($arme['prix']); ?></p>
                            <p class="card-text">Mode de tir: <?php echo htmlspecialchars($arme['mode_de_tir']); ?></p>
                            <img src="images/<?php echo strtolower($arme['nom']); ?>.png" alt="<?php echo htmlspecialchars($arme['nom']); ?>" class="arme-image">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;
    }
?>
</body>
</html>

<?php
$content = ob_get_clean();
require_once("main.php");
?>
