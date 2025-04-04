<?php
require_once('../config.php');
require_once('../model/order-repository.php');

session_start();

$orderByUser = findOrderByUser();

// Vérifie si l'utilisateur a appuyé sur le bouton annuler du form (method='post') et si la commande est au statut "CART"
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $orderByUser['status'] === "CART") {
    // Changement du statut de la commande
    $orderByUser['status'] = "CANCELLED";
    // Re-sauvegarde la commande avec le statut changé
    saveOrder($orderByUser);
}

require_once('../view/cancel-order-view.php');
