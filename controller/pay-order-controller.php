<?php 
require_once('../model/order-repository.php');

session_start();

$orderByUser = findOrderByUser();

require_once('../view/pay-order-view.php');