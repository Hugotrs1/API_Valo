<?php

// Récupérer les données de l'API
$agents = json_decode(file_get_contents("http://localhost/API_VALO/API/agents/initiateur"), true);

ob_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-M7B4Au9X9hCBb6WMyA3M8BHzrXm/1Y8VQukMlpt3J4IV3Ac/xnxjopUmgC6zY8Y5" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="data:image/png;base64,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">
    <title>Index Valorant</title>
    <style>
body{
    background-image: url('images/valorant_fond2.jpg'); 
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
    transform: scale(1.15); /* Agrandissement au survol */
}

.card-body {
    padding: 15px; /* Espace à l'intérieur de la carte */
    align-items: center; /* Alignement vertical des éléments */
}

.card-title {
    font-size: 2rem; /* Taille de la police du titre plus grande */
    color: #f8f9fa; /* Couleur claire pour le texte */
    margin-bottom: 10px; /* Espacement en dessous du titre */
}

.card-text {
    font-size: 1rem; /* Taille de la police pour le texte */
    color: #e0e0e0; /* Couleur légèrement grise pour le texte */
    margin: 5px 0; /* Marge entre les paragraphes */
}

.agent-image {
    width: 175px;  /* Ajustez la largeur de l'image */
    height: auto; /* Garde le rapport d'aspect */
    border-radius: 8px; /* Coins arrondis pour l'image */
    margin-left: 20px; /* Espace entre l'image et le texte */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ombre pour l'image */
}

.d-flex {
    display: flex;
    align-items: center; /* Aligner les éléments au centre verticalement */
}
</style>
</head>
<body>

<div class="container mt-4">
    <h1>Initiateurs</h1>
    <div class="row">
    <?php
if (!is_array($agents) || empty($agents)) {
    echo "<p>Aucun agent disponible.</p>";
} else {
    foreach ($agents as $agent): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body d-flex">
                    <div>
                        <h5 class="card-title"><?php echo htmlspecialchars($agent['nom']); ?></h5>
                        <p class="card-text">Classe: <?php echo htmlspecialchars($agent['classe']); ?></p>
                        <p class="card-text">Origine: <?php echo htmlspecialchars($agent['nationalite']); ?></p>
                        <p class="card-text">Année de sortie: <?php echo htmlspecialchars($agent['annee_sortie']); ?></p>
                    </div>
                    <img src="images/<?php echo strtolower($agent['nom']); ?>.png" alt="<?php echo htmlspecialchars($agent['nom']); ?>" class="agent-image">
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
require_once("main.php");;
?>
