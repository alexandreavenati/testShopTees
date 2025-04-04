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
    if ($quantity <= 0) {
        // création d'une exception si la quantité est <= à 0
        throw new Exception("Quantity is lesser than or equal to 0");
    } else if ($quantity > 3) {
        // création d'une exception si la quantité est > à 3
        throw new Exception("Quantity is greater than 3");
    } else {

        // stockage de la commande avec la date au moment de la création de la commande
        $order = [
            "product" => $product,
            "quantity" => $quantity,
            "createdAt" => new DateTime(),
            "status" => "CART"
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
