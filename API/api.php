<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));

function getConnexion() {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=agents_valorant;charset=utf8", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["message" => "Erreur de connexion à la base de données", "error" => $e->getMessage()]);
        exit;
    }
}
function sendJSON($data) {
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}

function getAgents() {
    $pdo = getConnexion();
    $stmt = $pdo->query("SELECT nom, classe, nationalite, annee_sortie FROM agents ORDER BY annee_sortie ASC");
    sendJSON($stmt->fetchAll(PDO::FETCH_ASSOC));
}

function getAgentByClasse($classe) {
    $pdo = getConnexion();
    $stmt = $pdo->prepare("SELECT nom, classe, nationalite, annee_sortie FROM agents WHERE classe = :classe ORDER BY annee_sortie ASC");
    $stmt->bindParam(':classe', $classe);
    $stmt->execute();
    sendJSON($stmt->fetchAll(PDO::FETCH_ASSOC));
}

function getArmes() {
    $pdo = getConnexion();
    $stmt = $pdo->query("SELECT nom, prix, typee, mode_de_tir FROM armes ORDER BY prix ASC");
    sendJSON($stmt->fetchAll(PDO::FETCH_ASSOC));
}

function getArmesByType($typee) {
    $pdo = getConnexion();
    $stmt = $pdo->prepare("SELECT nom, prix, mode_de_tir FROM armes WHERE typee = :typee ORDER BY prix ASC");
    $stmt->bindParam(':typee', $typee);
    $stmt->execute();
    sendJSON($stmt->fetchAll(PDO::FETCH_ASSOC));
}