<?php

// Récupère la commande (SQL -> SELECT * FROM order WHERE user.id = $id)
function findOrderByUser()
{
    if (array_key_exists("order", $_SESSION)) {
        return $_SESSION["order"];
    } else {
        return null;
    }
}

function createOrder($product, $quantity)
{
    // règle de commande
    if ($quantity <= 0 || $quantity > 3) {
        return false;
    } else {

        // stockage de la commande avec la date au moment de la création de la commande
        $order = [
            "product" => $product,
            "quantity" => $quantity,
            "createdAt" => new DateTime()
        ];

        return $order;
    }
}

//SQL -> INSERT INTO order VALUES ($order['product'], $order['quantity'])
// Sauvegarde commande
function saveOrder($order)
{
    $_SESSION['order'] = $order;
}
