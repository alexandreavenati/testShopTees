<?php
require_once('../config.php');
require_once('../model/order-repository.php');

session_start();

$orderByUser = findOrderByUser();

// Vérifie si l'utilisateur a appuyé sur le bouton payer du form (method='post')
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$orderByUser['status'] = "PAID";

saveOrder($orderByUser);

}

require_once('../view/pay-order-view.php');
