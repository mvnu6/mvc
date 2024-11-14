<?php
require_once 'Model/VeloModel.php'; // Inclure le modèle

$dernierVelo = getDernierVelo(); // Récupérer le dernier vélo
$velos = getTousLesVelos(); // Récupérer tous les vélos
include 'View/Accueil.php'; // Charger la vue
?>


