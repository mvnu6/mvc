<?php
require_once 'Model/VeloModel.php'; // Inclure le modèle

// Vérifier si l'ID du vélo est présent dans l'URL
if (isset($_GET['id'])) {
    $veloId = $_GET['id'];
    $velo = getVeloById($veloId); // Récupérer le vélo par ID
    if (!$velo) {
        // Si aucun vélo n'est trouvé avec cet ID, rediriger ou afficher un message d'erreur
        die("Vélo non trouvé.");
    }
} else {
    die("ID du vélo manquant.");
}

include 'View/Velo.php'; // Charger la vue avec les détails du vélo
?>
