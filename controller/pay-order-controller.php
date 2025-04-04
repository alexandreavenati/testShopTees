<?php

session_start();

require_once('../model/order-repository.php');

$message = "";

$orderByUser = findOrderByUser();

// je regarde si c'est une méthode post (si oui ça veut dire que l'utilisateur
// a cliqué sur "payer" dans le form)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($orderByUser['status'] === 'CART') {
        $orderByUser['status'] = 'PAID';
        saveOrder($orderByUser);
    } else {
        $message = "Order can only be paid while in cart.";
    }
}


require_once('../view/pay-order-view.php');
