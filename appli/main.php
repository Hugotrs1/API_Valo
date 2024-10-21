<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Valorant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/valorant logo.png">
    <style>
        body {
            background-color: #0f1923;
            color: white;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .navbar {
            background-color: #101823;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .nav-link {
            transition: background-color 0.4s, color 0.4s;
            color: #ffffff;
            border-radius: 8px;
        }
        .nav-link:hover {
            background-color: #ff4d4e;
            color: #101823; 
        }
        .nav-link.active {
            background-color: #ff4d4e; 
            color: white; 
        }

        .dropdown-menu {
            min-width: 100%;
            text-align: center;
            background-color: #101823;
            border: none; 
            border-radius: 4px; 
            padding: 10px; 
        }
        .dropdown-item {
            width: 100%;
            font-size: 1.1rem;
            font-weight: 500;
            color: #ffffff; 
        }

        .dropdown-item:hover {
            background-color: #ff4d4e; 
        }

       
        .dropdown-item.active {
            background-color: transparent; 
            color: #ffffff; 
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid d-flex justify-content-between">
        <img src="images/Valorant logo.png" alt="Logo" style="height: 40px;">
    </a>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
        <li class="nav-item flex-grow-1 text-center">
          <a class="nav-link fs-5 <?= ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item flex-grow-1 text-center">
          <a class="nav-link fs-5 <?= ($current_page == 'agents.php') ? 'active' : ''; ?>" href="agents.php">Agents</a>
        </li>
        <li class="nav-item dropdown flex-grow-1 text-center">
          <a class="nav-link dropdown-toggle fs-5 <?= ($current_page == 'duelistes.php' || $current_page == 'controleur.php' || $current_page == 'sentinelle.php' || $current_page == 'initiateur.php') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Classes
          </a>
          <ul class="dropdown-menu w-100">
            <li><a class="dropdown-item text-center <?= ($current_page == 'duelistes.php') ? 'active' : ''; ?>" href="duelistes.php">Duelistes</a></li>
            <li><a class="dropdown-item text-center <?= ($current_page == 'controleur.php') ? 'active' : ''; ?>" href="controleur.php">Controleurs</a></li>
            <li><a class="dropdown-item text-center <?= ($current_page == 'sentinelle.php') ? 'active' : ''; ?>" href="sentinelle.php">Sentinelles</a></li>
            <li><a class="dropdown-item text-center <?= ($current_page == 'initiateur.php') ? 'active' : ''; ?>" href="initiateur.php">Initiateurs</a></li>
          </ul>
        </li>
        <li class="nav-item flex-grow-1 text-center">
          <a class="nav-link fs-5 <?= ($current_page == 'armes.php') ? 'active' : ''; ?>" href="armes.php">Armes</a>
        </li>
        <li class="nav-item dropdown flex-grow-1 text-center">
          <a class="nav-link dropdown-toggle fs-5 <?= ($current_page == 'armes_de_poing.php' || $current_page == 'pistolets_mitrailleurs.php' || $current_page == 'fusils_a_pompe.php' || $current_page == 'fusils_mitrailleurs.php' || $current_page == 'fusils_de_precision.php' || $current_page == 'mitrailleuses_lourdes.php') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Armes
          </a>
          <ul class="dropdown-menu w-100">
            <li><a class="dropdown-item text-center <?= ($current_page == 'armes_de_poing.php') ? 'active' : ''; ?>" href="armes_de_poing.php">Armes de poings</a></li>
            <li><a class="dropdown-item text-center <?= ($current_page == 'pistolets_mitrailleurs.php') ? 'active' : ''; ?>" href="pistolets_mitrailleurs.php">Pistolets mitrailleurs</a></li>
            <li><a class="dropdown-item text-center <?= ($current_page == 'fusils_a_pompe.php') ? 'active' : ''; ?>" href="fusils_a_pompe.php">Fusils à pompe</a></li>
            <li><a class="dropdown-item text-center <?= ($current_page == 'fusils_mitrailleurs.php') ? 'active' : ''; ?>" href="fusils_mitrailleurs.php">Fusils mitrailleurs</a></li>
            <li><a class="dropdown-item text-center <?= ($current_page == 'fusils_de_precision.php') ? 'active' : ''; ?>" href="fusils_de_precision.php">Fusils de précision</a></li>
            <li><a class="dropdown-item text-center <?= ($current_page == 'mitrailleuses_lourdes.php') ? 'active' : ''; ?>" href="mitrailleuses_lourdes.php">Mitrailleuses lourdes</a></li>
          </ul>
        </li>
      </ul>
    </div>
        <img src="images/Valorant logo.png" alt="Logo" style="height: 40px;">
    </a>
  </div>
</nav>

<div class="container">
    <?= $content ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
