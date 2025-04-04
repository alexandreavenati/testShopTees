<?php
require_once('../config.php');
require_once('../model/order-repository.php');

session_start();

$orderByUser = findOrderByUser();

// Vérifie si l'utilisateur a appuyé sur le bouton payer du form (method='post')
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $orderByUser['status'] === "PAID") {
    
    // Changement du statut de la commande
    $orderByUser['status'] = "CANCELLED";
    // Re-sauvegarde la commande avec le statut changé
    saveOrder($orderByUser);
}

require_once('../view/cancel-order-view.php');