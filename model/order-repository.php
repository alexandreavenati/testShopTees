<?php

// Récupère la commande
function findOrderByUser()
{
    if (array_key_exists("order", $_SESSION)) {
        return $_SESSION["order"];
    } else {
        return null;
    }
}

function createOrder($product, $quantity) {
    // stockage de la commande
	$order = [
        "product" => $product,
        "quantity" => $quantity
    ];

    // Ajout dans ma zone de stockage (session serveur) la commande créée
    return $order;
}

// Sauvegarde commande
function saveOrder($order) {
    $_SESSION['order'] = $order;
}
