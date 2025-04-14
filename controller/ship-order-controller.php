<?php 
require_once('../config.php');
require_once('../model/order-repository.php');

session_start();

$message = "";

$orderByUser = findOrderByUser();

// je regarde si c'est une méthode post (si oui ça veut dire que l'utilisateur
// a cliqué sur "expédier la commande" dans le form)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($orderByUser['status'] === 'PAID') {
        $orderByUser['status'] = 'SHIPPED';

        $message = "Your order is being shipped.";
    } else if ($orderByUser['status'] === 'SHIPPED') {
        $message = "Your order is already being shipped.";
    } else {
        $message = "Order can only be shipped after being paid.";
    }
}

require_once('../view/ship-order-view.php');