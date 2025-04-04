<?php

require_once('../config.php');
require_once('../model/order-repository.php');

session_start();

$orderByUser = findOrderByUser();

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ($orderByUser['status'] === 'CART') {
		$orderByUser['status'] = "CANCELLED";
		saveOrder($orderByUser);
	} else {
		$message = "Order can only be cancelled while in cart.";
	}

}


require_once('../view/cancel-order-view.php');