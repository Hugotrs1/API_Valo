<?php
$agents = json_decode(file_get_contents("http://localhost/API_VALO/API/agents"), true);

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
    background-color: #101823; 
    border-radius: 12px; 
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); 
    margin: 20px;
    transition: transform 0.2s ease-in-out; 
}

.card:hover {
    transform: scale(1.15); 
}

.card-body {
    padding: 15px; 
    align-items: center; 
}

.card-title {
    font-size: 2rem;  
    color: #f8f9fa; 
    margin-bottom: 10px; 
}

.card-text {
    font-size: 1rem; 
    color: #e0e0e0; 
    margin: 5px 0; 
}

.agent-image {
    width: 175px; 
    height: auto; 
    border-radius: 8px; 
    margin-left: 20px; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
}

.d-flex {
    display: flex;
    align-items: center; /
}


    </style>
</head>
<body>

<div class="container mt-4">
    <h1>Index Persos</h1>
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
                    <img src="images/<?php echo strtolower($agent['nom']); ?>.png" alt="<?php echo htmlspecialchars($agent['nom']); ?>" class="agent-image"> <!-- Image de l'agent -->
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
