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
    // stockage de la commande
    if ($quantity < 0 || $quantity > 3) {
        return false;
    } else {
        $order = [
            "product" => $product,
            "quantity" => $quantity
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
