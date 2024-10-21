<?php
require_once("./api.php");

try {
    if (!empty($_GET['demande'])) {
        $url = explode("/", filter_var($_GET['demande'], FILTER_SANITIZE_URL));
        switch ($url[0]) {
            case "agents":
                empty($url[1]) ? getAgents() : getAgentByClasse($url[1]);
                break;
            case "armes":
                empty($url[1]) ? getArmes() : getArmesByType($url[1]);
                break;
            default:
                throw new Exception("La demande n'est pas valide, vérifiez l'URL.");
        }
    } else {
        throw new Exception("Problème de récupération de données.");
    }
} catch (Exception $e) {
    http_response_code(404);
    sendJSON(["message" => $e->getMessage(), "code" => $e->getCode()]);
}